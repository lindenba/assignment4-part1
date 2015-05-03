<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
//checks if there is an username entered
  if(($_POST['username']) == "" || ($_POST['username']) == null)
  {
    $_SESSION = array();
    session_destroy();
    echo "Username must be entered. Click <a href = 'login.php'>here</a> to return to the login screen.";
  }
  elseif(!isset($_POST['username']) && !isset($_SESSION['login']))
  {
    $_SESSION= array();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	  $filePath = implode('/', $filePath);
	  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	  header("Location: {$redirect}/login.php" , true);
	  die();
  }
  else
  {
    if(!isset($_SESSION['visits']) || $_SESSION['username'] != $_POST['username'])
    {
      $_SESSION['visits'] = 0;
    }

    $_SESSION['username'] = $_POST['username'];

    echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before.";

    $_SESSION['visits']++;

    echo "Click <a href='content2.php'>here</a> to go to content2.php page.<br>";
    echo "Click <a href='login.php?logout=end'>here</a> to logout.";
  }
if(isset($_GET['logout']))
{
  $_SESSION = array();
  session_destroy();
  $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
  $filePath = implode('/', $filePath);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
  header("Location: {$redirect}/login.php" , true);
  die();
}

?>
