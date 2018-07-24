<?php
/*
 * |--------------------------------------------------------------------------
 * | common constants
 * |--------------------------------------------------------------------------
 * |
 * | These are most* common constants which are use all over the project whenever necessary..
 * |
 */
switch (ENVIRONMENT) {
    case 'production':
        defined('HOST') or define('HOST', 'localhost');
        defined('USER') or define('USER', 'root');
        defined('PASSWORD') or define('PASSWORD', '');
        defined('DB_NAME') or define('DB_NAME', 'phpblog');
        break;
    default:
        defined('HOST') or define('HOST', 'localhost');
        defined('USER') or define('USER', 'root');
        defined('PASSWORD') or define('PASSWORD', '');
        defined('DB_NAME') or define('DB_NAME', 'phpblog');
        break;
}


/* project root directory */
defined('DIRECTORY') or define('DIRECTORY', 'DevBlog');

/* Root path of the Project */
defined('ROOT_PATH') or define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

/* Other Web Page specific constants */
defined('TITLE') or define('TITLE', 'My Personal PHP Blog');

/* Default controller and method */
defined('DEFAULT_CONTROLLER') or define('DEFAULT_CONTROLLER', 'PostController');
defined('DEFAULT_METHOD') or define('DEFAULT_METHOD', 'getPosts');