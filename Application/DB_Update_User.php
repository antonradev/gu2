<?php

// Calculating Additional XP according to User registration time calculation
// Registration date of the user
$user_created_date = strtotime($row_user['date_created']);

// Current time
$current_time = strtotime("now");

// Difference between Registration date and Current time
$user_living_time = $current_time - $user_created_date;

// Division of the big number 
// This value is added in the update xp_total_gained query
$time_to_xp = round($user_living_time / 500);



// Updating "Mastered Pages Views" 
if ($row_user['pages_views'] >= 10) {

  try {
    $stmt = $db->prepare("UPDATE users SET xp_total_gained = xp_total_gained + 500 + $time_to_xp WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $ex) {
    print "<h3>Error updating `xp_total_gained` value in database</h3>";
    print $ex->getMessage();
  }

  try {
    $stmt = $db->prepare("UPDATE users SET pages_views = 0 WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $ex) {
    print "<h3>Error updating `pages_views` value in database</h3>";
    print $ex->getMessage();
  }
}


// Updating "Mastered Pages Views" When User is VIP
if ($row_user['pages_views'] >= 10 && $row_user['vip_membership'] == 1) {

  try {
    $stmt = $db->prepare("UPDATE users SET xp_total_gained = xp_total_gained + 1000 + $time_to_xp WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $ex) {
    print "<h3>Error updating `xp_total_gained` value in database</h3>";
    print $ex->getMessage();
  }

  try {
    $stmt = $db->prepare("UPDATE users SET pages_views = 0 WHERE user_id=:user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $ex) {
    print "<h3>Error updating `pages_views` value in database</h3>";
    print $ex->getMessage();
  }
}
?>