<?php

// Set Page parameter variable
// Set default value of the page parameter
$current_page = '';

// Change the value if the page parameter is specified
if (isset($_GET['page']) || array_key_exists('page', $_GET)) {
  $current_page = $_GET['page'];
}

// Page titles
switch ($current_page) {
  case ('about'):
    $page_title = "About";
    break;
  case ('contacts'):
    $page_title = "Contacts";
    break;
  default:
    $page_title = PROJECT_NAME;
}


// Check User Membership status
if ($row_user['vip_membership'] == 1) {
  $vip_button_label = "You are a VIP Member";
  $vip_body_class = "vip-membership";
  $vip_button = "vip-button";
} else {
  $vip_button_label = "VIP Membership";
  $vip_body_class = "";
  $vip_button = "";
}



// The Page header file
include VIEWS_PATH . 'header.php';
?>