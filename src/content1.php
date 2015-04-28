<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(session_status() == $_SESSION['username'])
{
  if(isset($_Post['username']))
  {
    $_SESSION['username'] = $_Post['username'];
  }

  if(!isset($_SESSION['visits']))
  {
    $_SESSION['visits'] = 0;
  }
  $_SESSION['visits']++;
  echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before.
  Click <a href=login.php?logout=true>here</a> to logout.";
}


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
      $_SESSION['username'] = $_Post['username'];
      $_SESSION['visits'] = 0;
      $_SESSION['login'] = true;
    }
  }

  if(isset($_POST['login']) && isset($_POST['login']) == 'end' )
  {
    $_SESSION = array();
    session_destroy();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
  	$filePath = implode('/',$filePath);
  	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
  	header("Location: {$redirect}/login.php", true);
    die();
  }
}
?>
