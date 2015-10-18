<?php
require_once("views/header.php");

?>
<div class="wrap">
    <div class="col-md-3 col-md-offset-3 col-xs-6 col-xs-offset-2">
        <h1>Admin Login</h1>
        <form class="form-horizontal" role="form" method="POST" action="auth.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text" placeholder="enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" type="password" placeholder="enter your password">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-small login" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
