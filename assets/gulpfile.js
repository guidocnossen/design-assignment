'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const gutil = require('gulp-util');
const rename = require('gulp-rename')
const browserify = require('browserify');
const uglify = require('gulp-uglify');
const minifyCSS = require('gulp-minify-css');
const notify = require('gulp-notify');
const sort = require('gulp-sort');
const wpPot = require('gulp-wp-pot');
const path = require('path');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const source = require('vinyl-source-stream')
const buffer = require('vinyl-buffer');
const tap = require('gulp-tap');

const notice = function (notice) {
    var params = {
        message: notice,
        icon: path.join(__dirname, 'img/theme/favicon.png'),
    }
    return notify(params);
}

const createErrorHandler = function (name) {
    return function (err) {
        console.error('Error from ' + name + ' in compress task', err.toString());
    };
}

gulp.task('default', function() {
    gulp.start('sass', 'javascript');
});

gulp.task('lang', function () {
    return gulp.src('../**/*.php')
        .pipe(sort())
        .pipe(wpPot( {
            destFile:'wordpress-master-theme.pot'
        } ))
        .pipe(gulp.dest('../languages/'));
});

gulp.task('sass', function() {
    gulp.src('./sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', createErrorHandler('sass')))
        .pipe(sourcemaps.write())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .on('error', createErrorHandler('autoprefixer'))
        .pipe(gulp.dest('./css'))
        .pipe(minifyCSS())
        .on('error', createErrorHandler('uglify-css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./css'))
        .pipe(notice('Sass compiled!'));
});


gulp.task('javascript', function() {
    return gulp.src('./js/src/app.js', {read: false})
        .pipe(tap(function (file) {
            file.contents = browserify(file.path, {debug: true})
            .transform("babelify", {presets: ["env"]})
            .bundle();
        }))
        .pipe(buffer())
        .pipe(gulp.dest('./js/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('./js'))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sourcemaps.write('./'))
        .pipe(notice('JavaScript compiled!'));
});

gulp.task('watch', function() {
    gulp.watch('js/src/**/*.js', ['javascript']);
    gulp.watch('sass/**/*.scss', ['sass']);
});