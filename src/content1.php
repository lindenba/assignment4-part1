<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(isset($_Post['username'])){
  if($_Post['username'] == "" || $_Post['username'] == null)
  {
    echo "Username must be entered. Click <a href=login.php?logout=true>here</a>
     to return to the login screen.";
    $_SESSION['login'] == false;
  }
  else
  {
    if(!isset($_SESSION['username']))
    {
      $_SESSION['username'] == $_Post['username'];
      $_SESSION['visits'] == 0;
      $_SESSION['login'] == true;
    }
  }
}

if(isset($_SESSION['username']))
{
  if(isset($_POST['username']))
  {
    if($_SESSION['username'] != $_POST['username'])
    {
      $_SESSION['username'] = $_Post['username'];
      $_SESSION['visits'] = 0;
      $_SESSION['login'] = true;
    }
  }
  $_SESSION['visits']++;
  echo "Hello $_SESSION['username'] you have visited this page $_SESSION['visits'] times before.
  Click <a href=login.php?logout=true>here</a> to logout."

}


if(!isset($_SESSION['login']))
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
