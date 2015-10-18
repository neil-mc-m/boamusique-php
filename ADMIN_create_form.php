<?php
require_once("check_login_status.php");
require_once("/views/header.php");
print "<p>logged in as $username</p>";
# require_once("defaultnavStyles.php");
# $homeStyle = 'class="active"';
# require_once("views/navbar.php");
# require_once("views/divider.php");
$table = $_GET['table'];
?>

<form class="form-horizontal" role="form" method="POST" action="ADMIN_create_post.php">
  <div class="form-group">
  	<div class="col-md-6 col-md-offset-3 col-xs-12">
  		<p>This section will be updated with your new post ::</p>
  	  <select class="form-control" name="table">
        	<option value="<?php print $table; ?> "><?php print $table; ?></option> 	
      </select>
  	</div>
  </div>

  <div class="form-group">
  	<div class="col-md-6 col-md-offset-3 col-xs-12">
      <p>Type your new post here ::</p>
  		<textarea class="form-control" name="message" placeholder="Type your post here..make the text box bigger by dragging the bottom right corner"></textarea>
  	</div>
  </div>
  <div class="form-group">
  	<div class="col-md-3 col-md-offset-3 col-xs-3">
  		<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
  	</div>
  </div>
</form>