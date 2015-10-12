<?php
require_once("views/header.php");

?>
<div class="wrap">
	

<div class="container">
	<div class="login-container">
            <div class="form-box">
            	<h1>Admin Login</h1>
                <form action="auth.php" method="POST">
                    <input name="username" type="text" placeholder="username">
                    <input name="password" type="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form>
            </div>
        </div>        
</div>
</div>
</body>
</html>
