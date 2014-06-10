<?php

if ($row_user['vip_membership'] == 1) {
  // Shows VIP Membership message dialog and details
  include VIEWS_PATH . 'membership_dialogs/vip.php';
} else {
  // Shows Regular Membership message dialog and details
  include VIEWS_PATH . 'membership_dialogs/regular.php';
}
?>