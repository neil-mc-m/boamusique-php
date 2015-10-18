<?php
require_once("check_login_status.php");
require_once("/views/header.php");
# connect to the database and insert the 
# new post data. 
require_once __DIR__ . '/dbmodel/dbmodel.php';
$connection = dbconnect();
$html = createPost();
header('location:ADMIN_home.php');
exit();
?>
<!-- <div class="wrap"> -->
	<!-- <div class="container"> -->
		<!-- <a href="ADMIN_create_form.php" class="btn btn-primary" role="button">Create new Post</a> -->
	<!-- </div> -->
	<!-- <div class="container"> -->
		<!-- <div class="col-md-12 col-xs-12"> -->
			<!-- <?php #print $html; ?> -->
		<!-- </div> -->
	<!-- </div> -->

<!-- Footer -->
<!-- <?php # require_once("views/footer.php"); ?> -->



