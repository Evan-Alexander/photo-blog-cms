<?php
require_once( INCLUDE_PATH .'/config.php' );



$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$db = new PDO( $dsn, DB_USER, DB_PASS, $options );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






?>
