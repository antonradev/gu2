<?php

// Set Project Environment
define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
            break;

        case 'testing':
        case 'production':
            error_reporting(0);
            break;

        default:
            exit('The application environment is not set correctly.');
    }
}

// Defining main application paths
define('BASE_URL', 'http://iko.gotobg.net/~mynshost/xp2/');
define('BASE_PATH', realpath(dirname(__FILE__)));
define('APP_PATH', 'Application/');
define('VIEWS_PATH', 'Views/');
define('DB_PATH', 'Database/');
// Pages contents folder. It contains Content Files for all pages of the projects
define('PAGES_CONTENTS', 'Pages_Contents/');

define('PROJECT_NAME', 'Gamificated Users');

/** To restrict access in files 
 * if ( ! defined('BASEPATH')) exit('Direct script access is not allowed');
 */

// Connecting with the Database. SafePDO Class 
//include DB_PATH . 'SafePDO.php';

$author_name = "Anton Radev";
?>