<?php

Class SafePDO extends PDO {

    public static function exception_handler($exception) {
        // Output the exception details
        die('Uncaught exception: ' . $exception->getMessage());
    }

    public function __construct($dsn, $username = '', $password = '', $driver_options = array()) {

        // Temporarily change the PHP exception handler while we...
        set_exception_handler(array(__CLASS__, 'exception_handler'));

        // ... create a PDO object
        parent::__construct($dsn, $username, $password, $driver_options);

        // Change the exception handler back to whatever it was before
        restore_exception_handler();
    }

}

$db = new PDO('mysql:host=localhost;dbname=mynshost_xp;charset=utf8', 'mynshost_xp', 'lessonXP_2!');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>