<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Multtable</title>
		</head>
	<body>
    <form action="multtable.php" method="GET">

  <?php
$min_multiplicand = $_GET["min_multiplicand"];
$max_multiplicand = $_GET["max_multiplicand"];
$min_multiplier = $_GET["min_multiplier"];
$max_multiplier = $_GET["max_multiplier"];

  //check if input is acceptable
  $input=true;
  //parameters are there
  if(empty($_GET['min_multiplicand']) == true)
    {
    echo "Missing parameter min_multiplicand<br>";
    $input=false;
    }

  if(empty($_GET['max_multiplicand']) == true)
    {
      echo "Missing parameter max_multiplicand<br>";
      $input=false;
    }

  if(empty($_GET['min_multiplier']) == true)
    {
        echo "Missing parameter min_multiplier<br>";
        $input=false;
    }

  if(empty($_GET['max_multiplier']) == true)
    {
          echo "Missing parameter max_multiplier<br>";
          $input=false;
    }

//parameters are an integer
  if(!ctype_digit($min_multiplicand))
  {
    echo "Min-multiplicand must be an integer<br>";
    $input=false;
  }
  if(!ctype_digit($max_multiplicand))
  {
    echo "Max-multiplicand must be an integer<br>";
    $input=false;
  }
  if(!ctype_digit($min_multiplier))
  {
    echo "Min-multiplier must be an integer<br>";
    $input=false;
  }
  if(!ctype_digit($max_multiplier))
  {
    echo "Max-multiplier must be an integer<br>";
    $input=false;
  }
  if($input == false)
  {
    exit();
  }
// min is less than the max
  if($min_multiplicand > $max_multiplicand)
  {
    echo "Min-multiplicand is larger than max-multiplicand<br>";
  //  exit();
  }

  if($min_multiplier > $max_multiplier)
  {
    echo "Min-multiplier is larger than max-multiplier<br>";
  //  exit();
  }



//table display
    echo "<table border='1'> <thead> <tr> <th></th>";
    for($x=$min_multiplicand; $x<=$max_multiplicand; $x++)
    {
      echo "<th>$x</th>";
    }
    echo "</tr> </thead> <tbody>";
      for($y=$min_multiplier; $y<=$max_multiplier; $y++)
      {
        echo "<td>$y</td>";

      for($z=$min_multiplicand; $z<=$max_multiplicand; $z++)
      {
        echo "<td>";
        echo $z*$y;
        echo "</td>";
      }
      echo "</tbody>";
}
echo "</table>";
  ?>
</body>
</html>
