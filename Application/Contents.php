<?php

switch ($current_page) {
  case ('about'):
    include APP_PATH . 'Finded_Item.php';
    include VIEWS_PATH . PAGES_CONTENTS . 'about.php';
    break;
  case ('contacts'):
    include APP_PATH . 'Finded_Item.php';
    include VIEWS_PATH . PAGES_CONTENTS . 'contacts.php';
    break;
  default:
    include VIEWS_PATH . PAGES_CONTENTS . 'homepage.php';
}
?>