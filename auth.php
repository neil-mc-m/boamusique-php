<?php
session_start(); // starts a new session
require_once('dbmodel.php'); // includes the model file where all php functions are stored
$connection = dbconnect(); // calls the connection function

$username = $_POST['username']; // gets the username from the login form
$password = $_POST['password']; // gets the password from the login form

$query = "SELECT username, password FROM auth WHERE username='$username' AND password='$password';";// SQL query
$result = mysqli_query($connection, $query); // queries the database, stores the result as $result
$count = mysqli_num_rows($result); // counts the rows returned
$row = mysqli_fetch_assoc($result); // returns the result as an associative array

if ($count == 1) { // if there is 1 row returned, that means the user information from login form is correct
    
    $_SESSION['username'] = $username; 

	header('location: ADMIN_home.php');  // Then redirect to a success message page and continue.
    exit();									
    } 
    else {
		header('location: login_error.php'); // if there is no rows returned from the query, user information from login form is incorrect,
		exit();                                    // so redirect to an error page.
	}
