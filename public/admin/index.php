<?php
require_once("../../includes/init.php");

if (!$session->is_logged_in()) { redirect_to("login.php");}
?>

<?php include('../template-parts/admin-header.php');?>

            <h2>Menu</h2>

<?php include('../template-parts/admin-footer.php');?>
