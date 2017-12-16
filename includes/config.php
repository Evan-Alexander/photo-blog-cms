<?php
$error_mode = true;
//toggle errors
if($error_mode){
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
defined('DB_HOST') ? null : define("DB_HOST", "localhost");
defined('DB_USER') ? null : define("DB_USER", "gallery");
defined('DB_PASS') ? null : define("DB_PASS", "gallery");
defined('DB_NAME') ? null : define("DB_NAME", "oop_photo_gallery");


// CREATE DATABASE oop_photo_gallery;
//
// CREATE TABLE users (
//     id int(11) NOT NULL auto_increment,
//     username varchar(50) NOT NULL,
//     password varchar(40) NOT NULL,
//     first_name varchar(30) NOT NULL,
//     last_name varchar(30) NOT NULL,
//     PRIMARY KEY (id)
// );
//
// GRANT ALL PRIVILEGES ON oop_photo_gallery.*
//     TO 'gallery'@'localhost'
//     IDENTIFIED BY 'gallery';

 ?>
