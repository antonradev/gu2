<?php

header("Content-type: application/json");

// Include all needed configs and files
include 'Config.php';

// Database connection. Extending PDO class and Host details
include DB_PATH . 'SafePDO.php';

// Pages Sessions
include APP_PATH . 'Sessions.php';

// Database query for the user information
include APP_PATH . 'DB_Select_Queries.php';

// Using current time and getting its last second digit
// to add small value to xp_total_gained
$current_time_value = strtotime("now");
$added_xp_second = substr($current_time_value, -1);
if (isset($_SESSION['current_pages_views'])) {
    try {
        $stmt = $db->prepare("UPDATE users SET xp_total_gained = xp_total_gained + $added_xp_second WHERE user_id=:user_id");
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $ex) {
        print "<h3>Error adding small value to the Total XP number</h3>";
        print $ex->getMessage();
    }
}




echo json_encode(array(
    "total_xp_data" => $row_user['xp_total_gained'],
    "level_name_data" => $row_current_levels['level_name']
));


// Closing Database Connection
$db = null;
?>