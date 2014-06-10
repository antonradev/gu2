<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $page_title ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="http://iko.gotobg.net/~mynshost/xp2/css/main.css" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://iko.gotobg.net/~mynshost/xp2/js/application.js"></script>
        <meta name="description" content="" />
    </head>
    <body class="<?php if (isset($vip_body_class)) { print $vip_body_class; } ?>">
        <div class="page">
            <?php
            include VIEWS_PATH . 'profile_display.php';
            include VIEWS_PATH . 'navigation.php';
            ?>

            <div class="container">
