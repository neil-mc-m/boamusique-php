<?php
session_start(); // starts a session or continues a previously started session
$isloggedin = FALSE; // sets the default values for isloggedin variable
$username = NULL; // sets the default value for username variable.


if (isset($_SESSION['username'])) { // if there is a username stored in the SESSION array
    $isloggedin = TRUE;             // set $isloggedin to true
    $username = $_SESSION['username']; // and $username to the username stored in the SESSION
}
                                    
    