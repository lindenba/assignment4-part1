<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$parameters;
$display = array();

if ($_SERVER['REQUEST_METHOD'] == "GET"){
	if ($display == $_GET) {
		echo "{\"Type\":\"GET\" , \"parameters\" : null}";
	}
	else {
		$parameters = json_encode($_GET);
		echo " {\"Type\":\"GET\" , \"parameters\" : $parameters}";
	}
}
else {
	if ($display==$_POST) {
		echo " {\"Type\":\"POST\" , \"parameters\" : null}";
	}
	else {
		$parameters = json_encode($_POST);
		echo " {\"Type\":\"POST\" , \"parameters\" : $parameters}";
	}
}
?>
