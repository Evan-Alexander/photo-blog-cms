<?php


// Define core paths

define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('INCLUDE_PATH', SITE_ROOT . '/includes');


require_once(INCLUDE_PATH .'/config.php');

require_once(INCLUDE_PATH . '/db.php');

require_once(INCLUDE_PATH . '/functions.php');

require_once(INCLUDE_PATH . '/Session.class.php');

require_once(INCLUDE_PATH . '/Sql.class.php');

require_once(INCLUDE_PATH . '/User.class.php');
