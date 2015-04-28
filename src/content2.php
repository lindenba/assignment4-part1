<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(isset($_SESSION['login']) && isset($_SESSION['login']) == true)
{
  echo "Hello $_SESSION['username'];
  Click <a href=content1.php>here</a> to return to content1.php."
}
else
{
  $_SESSION = array();
  session_destroy();
  $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
  die();
}
?>
