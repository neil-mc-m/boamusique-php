<?php
require_once("views/header.php");
require_once("views/divider.php");
require_once("defaultnavStyles.php");
$homeStyle = 'class="active"';
require_once("views/navbar.php");
require_once("dbmodel.php");
$connection = dbconnect();
global $connection;	
$message = $_GET['message'];
$id = $_GET['id'];
$table = $_GET['table'];
# Next 2 lines print
# out the GET variables
# useful for debugging
# var_dump($id);
# var_dump($message);

$query = "UPDATE $table SET post = '$message' WHERE id = $id;";
mysqli_query($connection, $query);
closeconnection($connection);
header('location:ADMIN_home.php');
exit();
?>
<!-- <a href="ADMIN_read_news.php" class="btn btn-primary" role="button">Read News Posts</a> -->


