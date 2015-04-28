
<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <title>Login</title>
</header>
<body>

<?php
session_start();
if(isset($_GET['logout']) && $_GET['logout'] == true){
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
