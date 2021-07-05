<?php
    /*
     * Functions mimicking WP utilities
     */

    $site_title = 'Fundamental';
    $site_tagline = 'Design Opdracht';

    /*
     * Returns specific info about site
     */
    function get_bloginfo($attr) {
        global $site_title, $site_tagline;

        if ('name' === $attr) {
            return $site_title;
        }

        if ('description' === $attr) {
            return $site_tagline;
        }
    }

    /*
     * Returns base url
     */
    function get_template_directory_uri() {
        $uri = sprintf(
            "%s://%s%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            isset($_SERVER['SERVER_PORT']) ? ':'. $_SERVER['SERVER_PORT'] : '',
            substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1)
        );

        return $uri;
    }

    /*
     * Returns homepage url
     */
    function get_home_url() {
        return 'index.php';
    }

    /*
     * Returns template part
     */
    function dbk_get_part($slug, $data = [], $echo = true) {
        extract($data);

        $template = $slug . '.php';

        if (!$echo) {
            ob_start();
        }

        include($template);

        if (!$echo) {
            return ob_get_clean();
        }
    }

    /*
     * Returns clean phonenumber compatible with href tel:
     */
    function dbk_phone_to_numbers($phone) {
        return str_replace(['+', '(', ')', ' '], ['00', '','',''], $phone);
    }

    /*
     * Returns a string limited to a certain amount of characters
     */
    function dbk_truncate($string, $length = 100, $append = '&hellip;') {
        $string = trim($string);

        if (strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }
