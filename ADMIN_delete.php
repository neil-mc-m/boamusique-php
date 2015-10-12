<?php
require_once("views/header.php");
require_once("views/divider.php");
require_once("defaultnavStyles.php");
$homeStyle = 'class="active"';
require_once("views/navbar.php");
require_once("dbmodel.php");
$connection = dbconnect();

global $connection;
$id = $_GET['id'];
$table = $_GET['table'];
$query = "DELETE FROM $table WHERE id = '$id';";
$result = mysqli_query($connection, $query);
if (!$result) {	
	print "No luck";
} else {
		print "success";		
}	
closeconnection($connection);
header('location:ADMIN_home.php');
exit();
?>
<!-- <div class="container">
	
	<a href="ADMIN_create_form.php" class="btn btn-primary" role="button">Create Post</a>
	<a href="ADMIN_read_news.php" class="btn btn-primary" role="button">Read News Posts</a>
	
</div> -->