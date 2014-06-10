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


if ($_GET['vip'] == "activate") {

  try {
    $stmt = $db->prepare("UPDATE users SET vip_membership = 1, xp_total_gained = xp_total_gained -100 WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
//        header('Location: index.php?vip=activated');
    header('Location: index.php');
  } catch (PDOException $ex) {
    print "<h3>Error updating `vip_membership` value in database</h3>";
    print $ex->getMessage();
  }
}

if ($_GET['vip'] == "deactivate") {

  try {
    $stmt = $db->prepare("UPDATE users SET vip_membership = 0 WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $vip_body_class = "";
    $vip_button = "";
//        header('Location: index.php?vip=deactivated');
    header('Location: index.php');
  } catch (PDOException $ex) {
    print "<h3>Error updating `vip_membership` value in database</h3>";
    print $ex->getMessage();
  }
}











// Closing Database Connection
$db = null;
?>