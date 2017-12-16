<?php
require_once('../includes/init.php' );

// $user = User::find_by_id(1);
// echo $user->full_name();

echo "<hr />";

$users = User::find_all();
foreach($users as $user) {
  echo "User: ". $user->username ."<br />";
  echo "Name: ". $user->full_name() ."<br /><br />";
}
echo INCLUDE_PATH .'/config.php';
// echo $_SERVER['DOCUMENT_ROOT'];
?>
