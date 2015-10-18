<?php
require_once("check_login_status.php");
require_once("views/header.php");

require_once("/dbmodel/dbmodel.php");
$connection = dbconnect();
$html = readAllNews();
?>

<div class="container">
	<a href="ADMIN_create_form.php" class="btn btn-primary" role="button">Create new Post</a>
</div>
<div class="container">
	<div class="col-md-12 col-xs-12">
		<?php print $html; ?>
	</div>
</diV>

<!-- Footer -->
<?php require_once("views/footer.php"); ?>

