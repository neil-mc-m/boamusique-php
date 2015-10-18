<?php
require_once("views/header.php");
require_once("views/header_link.php");
require_once("defaultnavStyles.php");
$aboutStyle = 'class="active"';
require_once("views/navbar.php");
require_once __DIR__.'../dbmodel/dbmodel.php';
$connection = dbconnect();
$html = readNews();
?>
<div class="jumbotron jumbotron-news"></div>
<div class="container">
	<div class="col-md-12 col-xs-12">
		<h2><span class="header-style">News</span></h1>
		<?php print $html; ?>
	</div>
</div>
<div class="container">
	<span class="header-style"><h2><a href="archive.php"> Go to Archives</a></h2></span>
</div>
<div class="divider">
    <img src="images/g4012.png" alt="divider line">
</div>
<!-- Footer -->
<?php require_once("views/footer.php"); ?>

