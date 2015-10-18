<?php
require_once("check_login_status.php");
require_once __DIR__ . '/views/header.php';
if ($isloggedin)
{
    print "<p>logged in as $username</p>";
}else {
    header('location: /../logout.php');
}


# require_once("defaultnavStyles.php");
# $homeStyle = 'class="active"';
# require_once("views/navbar.php");
require_once __DIR__ . '/dbmodel/dbmodel.php';
$connection = dbconnect();
$html = readAllNews();
$connection = dbconnect();
$events = readAllEvents();
?>

	<div class="container-fluid">
        <div class="row">
		<div class="col-md-6 col-xs-12">
			<h2>News</h2>
			<a href="ADMIN_create_form.php?table=news" class="btn btn-primary" role="button">Create new News Post</a>
            <div class="post"><?php print $html; ?></div>
		</div>


		<div class="col-md-6 col-xs-12">
			<h2>Events</h2>
			<a href="ADMIN_create_form.php?table=events" class="btn btn-primary" role="button">Create new Event Post</a>
            <div class="post"><?php print $events; ?></div>
		</div>
            </div>
    </div>
<p><a href="logout.php" class="btn btn-info" role="button">Logout</a></p>



