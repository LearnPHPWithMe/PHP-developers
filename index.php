<?php

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 *     development
 *     production
 *     testing
 */

define('ENVIRONMENT', 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(E_ALL ^ E_DEPRECATED);
        ini_set('display_errors', 1);
        break;
    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        break;
}

/* include required files */
require_once ('webroot/config/constant.php');
require_once ('webroot/config/config.php');
require_once ('webroot/controllerS/posts.controller.php');

// set root url to global variable
define('SITE_URL', config::getRootURL());

require_once ('bootstrap.inc.php');

?>