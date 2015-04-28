
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
</head>
<body>

<?php>
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');
session_start();
if(isset($_GET['loggedOut']) && $_GET['loggedOut'] == true){
$_SESSION = array();
session_destroy();
}
?>
<h2>Login</h2>
<form action="content1.php" method="post">
Username <input type="text" name="username"/>
<input type="submit" name="submit" value="login"/>
</form>
</body>
</html>
