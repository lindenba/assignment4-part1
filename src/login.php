
<?PHP session_start();?>
<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <title>Login</title>
</header>
<body>

<?php
if(isset($_GET['logout']) && $_GET['logout'] == 'end'){
$_SESSION = array();
session_destroy();
}
?>
<h2>Login</h2>
<form action="content1.php" method="POST">
Username <input type="text" name="username"/>
<input type="submit" value="login"/>
</form>
  </body>

</html>
