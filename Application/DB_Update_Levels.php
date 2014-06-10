<?php


if ($row_user['xp_total_gained'] > $row_levels[0]['min_value'] && $row_user['xp_total_gained'] < $row_levels[0]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 1 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}


if ($row_user['xp_total_gained'] > $row_levels[1]['min_value'] && $row_user['xp_total_gained'] < $row_levels[1]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 2 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}


if ($row_user['xp_total_gained'] > $row_levels[2]['min_value'] && $row_user['xp_total_gained'] < $row_levels[2]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 3 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[3]['min_value'] && $row_user['xp_total_gained'] < $row_levels[3]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 4 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[4]['min_value'] && $row_user['xp_total_gained'] < $row_levels[4]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 5 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[5]['min_value'] && $row_user['xp_total_gained'] < $row_levels[5]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 6 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[6]['min_value'] && $row_user['xp_total_gained'] < $row_levels[6]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 7 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[7]['min_value'] && $row_user['xp_total_gained'] < $row_levels[7]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 8 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[8]['min_value'] && $row_user['xp_total_gained'] < $row_levels[8]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 9 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[9]['min_value'] && $row_user['xp_total_gained'] < $row_levels[9]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 10 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}

if ($row_user['xp_total_gained'] > $row_levels[10]['min_value'] && $row_user['xp_total_gained'] < $row_levels[10]['max_value']) {
  $stmt = $db->prepare("UPDATE users SET level_number = 11 WHERE user_id=:user_id ");
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
}


?>