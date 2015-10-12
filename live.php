<?php
require_once("views/header.php");
require_once("views/header_link.php");
require_once("defaultnavStyles.php");
$liveStyle = 'class="active"';
require_once("views/navbar.php");
require_once("views/divider.php");
require_once("dbmodel.php");
$connection = dbconnect();
$events = readEvents();
?>
     
<div class="jumbotron jumbotron-live">content to follow</div>
<div class="container">
	<div class="col-md-12 col-xs-12">
		<h2><span class="header-style">Events</span></h1>
		<?php print $events; ?>
	</div>
</div>
<!-- Footer -->
<?php require_once("views/footer.php"); ?>
