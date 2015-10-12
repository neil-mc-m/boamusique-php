<?php
require_once("check_login_status.php");
require_once("views/header.php");
print "<p>logged in as $username</p>";
require_once("dbmodel.php");
$connection = dbconnect();
global $connection;
$id = $_GET['id'];
$table = $_GET['table'];
$query = "SELECT post FROM $table WHERE id = '$id';";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$post = $row['post'];
 
closeconnection($connection);			
?>
<form class="form-horizontal" role="form" method="GET" action="ADMIN_process_update.php">
  <div class="form-group">
  	<div class="col-md-6 col-md-offset-3 col-xs-12">
  		<input type="text" class="form-control" name="message" value="<?php print $post;?>"></input>
  		<input type="hidden" name="id" value="<?php print $id;?>">
      <input type="hidden" name="table" value="<?php print $table;?>">
  	</div>
  </div>
  <div class="form-group">
  	<div class="col-md-3 col-md-offset-3 col-xs-3">
  		<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
  	</div>
  </div>
</form>