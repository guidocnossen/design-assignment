<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php if (isset($page_title) && $page_title): echo $page_title .' | '; endif; ?><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>

    <?php // <meta name="google" content="notranslate"> optional ?>
    <meta name="format-detection" content="telephone=no">

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" viewport-fit="cover">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#f58a38">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#f58a38">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#f58a38">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/theme/favicon.png">
    <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/theme/favicon.ico">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
    <![endif]-->

    <link rel="manifest" href="manifest.json">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><?php // speeds up Google Fonts ?>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:400,700&display=swap">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css?latest=<?php echo filemtime('assets/css/app.css'); ?>">

</head>