<?php
require_once("views/header.php");
require_once("views/divider.php");
require_once("defaultnavStyles.php");
$aboutStyle = 'class="active"';
require_once("views/navbar.php");

require_once("dbmodel.php");
$connection = dbconnect();
$html = readArchives();
?>
<div class="jumbotron jumbotron-about"></div>
<div class="container">
	<div class="col-md-12 col-xs-12">
		<h2><span class="header-style">Archives</span></h1>
		<?php print $html; ?>
	</div>
</div>
<div class="container">
	<span class="header-style"><h2><a href="news.php">Back to News</a></h2></span>
</div>
<!-- Footer -->
<?php require_once("views/footer.php"); ?>

