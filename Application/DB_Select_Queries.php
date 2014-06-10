<?php

// Users table query
try {
  $stmt = $db->prepare("SELECT * FROM users WHERE user_id=:user_id");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
  $row_user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  print "<h3>An Error occured!</h3>";
  print $ex->getMessage();
}


$row_user_level = $row_user['level_number'];

// Query for all levels_names used for updating Users table
try {
  $stmt = $db->prepare("SELECT * FROM levels_names");
  $stmt->execute();
  $row_levels = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  print "<h3>An Error occured!</h3>";
  print $ex->getMessage();
}

// Query for the current level name
try {
  $stmt = $db->prepare("SELECT level_name FROM levels_names WHERE level_id = $row_user_level");
  $stmt->execute();
  $row_current_levels = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  print "<h3>An Error occured!</h3>";
  print $ex->getMessage();
}

// Findable Items table query
try {
  $stmt = $db->prepare("SELECT * FROM findable_items ORDER BY RAND() LIMIT 1");
  $stmt->execute();
  $row_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  print "<h3>An Error occured!</h3>";
  print $ex->getMessage();
}


?>