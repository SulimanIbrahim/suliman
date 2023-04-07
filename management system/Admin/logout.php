<?php session_start(); ?>
<?php 

include_once('../includes/session.php');
include_once('../includes/functions.php');

     


$_SESSION['admin_id'] = null;
$_SESSION['admin_username'] = null;
$_SESSION['user_id'] = null;
$_SESSION['user_username'] = null;

redirect("log.php");

?>