<?php

session_start();


if(isset($_COOKIE['session_id']) && isset($_SESSION['username']) && isset($_COOKIE['csrf_Token'])){
	session_unset();
	session_destroy();

    unset($_COOKIE["session_id"]);
    unset($_COOKIE['csrf_Token']);
    setcookie('session_id', '', time() + (86400 * 30), "/");
    setcookie('csrf_Token', '', time() + (86400 * 30), "/");
}
header("location: ./loginpage.php");
?>