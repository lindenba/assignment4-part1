<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(!isset($_Post['username']) || isset($_Post['username'])==null)
  {
    if (!isset($_SESSION['login'])){
    echo "Username must be entered. Click <a href = 'login.php'>here</a> to return to the login screen.";
    $_SESSION['login'] == false;
  }
  }

$_SESSION['login'] = 0;

if(!isset($_SESSION['visits']))
{
  $_SESSION['visits'] = 0;
}

  echo "Hello $_SESSION[username], have visited this page $_SESSION[visits] times before.
  Click <a href='login.php'>here</a> to logout.";
  echo "Click <a href='content2.php'>here</a> to go to content2.php page.";
  $_SESSION['visits']++;
