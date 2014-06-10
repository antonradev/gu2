<?php

/**
 * Gamificated User
 *
 * Gamification project for users profiles. 
 *
 * @package		GamificatedUsers
 * @author		Anton Radev
 * @copyright	Copyright (c) 2014, Anton Radev
 * @license		http://opensource.org/licenses/MIT
 * @link		http://
 * @since		Version 0.2
 */
// ------------------------------------------------------------------------
// Include all needed configs and files
include 'Config.php';

// Database connection. Extending PDO class and Host details
include DB_PATH . 'SafePDO.php';

// Pages Sessions
include APP_PATH . 'Sessions.php';

// Database query for the user information
include APP_PATH . 'DB_Select_Queries.php';

// User Level Number Update
include APP_PATH . 'DB_Update_Levels.php';

// Update User Data
include APP_PATH . 'DB_Update_User.php';

// Include Header files
include APP_PATH . 'Headers.php';

// Include Content files
include APP_PATH . 'Contents.php';

// Include Footer files
include APP_PATH . 'Footers.php';

// Closing Database Connection
$db = null;
?>