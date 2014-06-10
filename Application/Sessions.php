<?php

session_start();
if (isset($_SESSION['current_pages_views'])) {
  $_SESSION['current_pages_views']++;
} else {
  $_SESSION['current_pages_views'] = 0;
}

// Simulate User Logged-In
$user_id = 1;

/**
 * Incrementing "pages_views" value in the database table 
 * 
 * The value increments when the temporary refreshes reach 20
 * Then the current refreshes value returns back to zero
 */
if (($_SESSION['current_pages_views']) >= 20) {

  try {
    $stmt = $db->prepare("UPDATE users SET pages_views = pages_views + 1");
    $stmt->execute();
  } catch (PDOException $ex) {
    print "<h3>An Error occured!</h3>";
    print $ex->getMessage();
  }
  $_SESSION['current_pages_views'] = 0;
  print '<div class="mastered-views-leveling"></div>';
}
?>