<?php
/*code taken from class lecture to check for errors*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['username']))
{
  $_SESSION=array();//clears data stored in array
  session_destroy();//destroy the session cookie that identifies it
  header("Location:login.php", true);
}
else
{
  echo "Click <a href='content1.php'>here</a> to return to content1.php page";
}
?>
