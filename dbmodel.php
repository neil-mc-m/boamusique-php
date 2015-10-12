<!-- Database functions for admin users -->

<?php
function dbconnect()
{
	$host = "localhost";
	$user = "neil";
	$password = "neil";
	$dbname = "posts";
	$connection = mysqli_connect($host, $user, $password, $dbname)or die("Error connecting");
	return $connection;
}

function closeconnection($connection)
{
	global $connection;
	mysqli_close($connection);
}

function createPost()
{
	global $connection;
	# get the information from the create form
	$table = $_POST['table'];
	$message = $_POST['message'];
	$html = '';
	# insert the data into the chosen table
	$query = "INSERT INTO $table(id, created, post) VALUES (default, curdate(), '$message');";
	$result = mysqli_query($connection, $query);
	if ($result) {
		$html .= "<h3>Success..A new post has been added</h3>";
	} else {
		$html .= "<h3>oops..An error occurred</h3>";
	}
	closeconnection($connection);
	return $html;
}

function readNews()
{
	global $connection;
	$html = '';
	# this query only displays posts up to 20 days old. change the 20 as suits. For
	# example, changing it to 30 will only show posts from the last month.
	$query = "SELECT post FROM news WHERE created > DATE_SUB(curdate(), INTERVAL 20 DAY) ORDER BY id DESC;";
	$result = mysqli_query($connection, $query);
	# display a simple message if nothing in the database
	// if (!$result) {
		// $html .= "<h3>No news today</h3>"
	// }
	# loop through the results of the query
	while ($row = mysqli_fetch_assoc($result)) {
		$post = $row['post'];
		$html .= "<p>$post</p>";
		$html .= "<hr>";
	}
	closeconnection($connection);
	return $html;
}

function readEvents()
{
	global $connection;
	$eventshtml = '';
	# this query only displays posts up to 20 days old. change the 20 as suits. For
	# example, changing it to 30 will only show posts from the last month.
	$query = "SELECT post FROM events WHERE created > DATE_SUB(curdate(), INTERVAL 20 DAY) ORDER BY id DESC;";
	$result = mysqli_query($connection, $query);
	# display a simple message if nothing in the database
	// if (!$result) {
		// $html .= "<h3>No news today</h3>"
	// }
	# loop through the results of the query
	while ($row = mysqli_fetch_assoc($result)) {
		$post = $row['post'];
		$eventshtml .= "<p>$post</p>";
		$eventshtml .= "<hr>";
	}
	closeconnection($connection);
	return $eventshtml;	
}	

function readArchives() 
{
	global $connection;
	# set the default timezone to europe
	date_default_timezone_set("europe/dublin");
	$html = '';
	# this query returns posts older than the amount specified after the interval.
	# change the 5 to whatever number suits. can also use 1 month, 2 month etc.. 
	$query = "SELECT post FROM news WHERE created < DATE_SUB(curdate(), INTERVAL 30 DAY);";
	# loop through to display as html
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$post = $row['post'];
		$html .= "<p>$post</p>";
		$html .= "<hr>";
	}
	closeconnection($connection);
	return $html;
}

function readAllNews() 
{
	global $connection;
	$html = '';
	$query = "SELECT * FROM news;";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$date = $row['created'];
			$post = $row['post'];
			$html .= "<p>$post<a href='ADMIN_delete.php?id=$id&table=news' class='btn btn-danger btn-sm'>Delete</a><a href='ADMIN_update.php?id=$id&table=news' class='btn btn-info btn-sm'>Update</a></p>";
			$html .= "<hr>";	
	}
	closeconnection($connection);
	return $html;
}

function readAllEvents() 
{
	global $connection;
	$events = '';
	$query = "SELECT id, created, post FROM events;";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$date = $row['created'];
			$post = $row['post'];

			$events .= "<p>$post<a href='ADMIN_delete.php?id=$id&table=events' class='btn btn-danger btn-sm'>Delete</a><a href='ADMIN_update.php?id=$id&table=events' class='btn btn-info btn-sm'>Update</a></p>";
			$events .= "<hr>";	
	}
	closeconnection($connection);
	return $events;
}


