/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * ======================================================================== */

var App = function(namespace) {
    var self = this;
    var namespace = namespace;

    this.fire = function(func, args) {
        var fire;

        fire = func !== '';
        fire = fire && namespace[func];

        if (fire) {
            namespace[func](args);
        }
    }

    this.loadEvents = function() {
        // Fire common init JS
        self.fire('global');

        // Fire page-specific init JS, and then finalize JS
        $.each(document.body.className.replace(/-/g, '_').replace('page_template_', '').split(/\s+/), function(i, classnm) {
          self.fire(classnm);
        });
    }
};

module.exports = App;