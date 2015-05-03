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
    </body>
  </html>
  <?php
  //check if input is acceptable
  $input=false;
  if(isset($_GET['min-multiplicand']))
    {
    $min_multiplicand = $_GET['min_multiplicand'];
    }
  else
    {
    echo "Missing parameter min_multiplicand";
    $input=false;
    }

  if(isset($_GET['max-multiplicand']))
    {
      $max_multiplicand = $_GET['max_multiplicand'];
    }
  else
    {
      echo "Missing parameter max_multiplicand";
      $input=false;
    }

  if(isset($_GET['min-multiplier']))
    {
        $min_multiplier = $_GET['min_multiplier'];
    }
  else
    {
        echo "Missing parameter min_multiplier";
        $input=false;
    }

  if(isset($_GET['max-multiplier']))
    {
          $max_multiplier = $_GET['max_multiplier'];
    }
  else
    {
          echo "Missing parameter max_multiplier";
          $input=false;
    }

  if(!ctype_digit($min_multiplicand))
  {
    echo "Min-multiplicand must be an integer";
    $input=false;
  }
  if(!ctype_digit($max_multiplicand))
  {
    echo "Max-multiplicand must be an integer";
    $input=false;
  }
  if(!ctype_digit($min_multiplier))
  {
    echo "Min-multiplier must be an integer";
    $input=false;
  }
  if(!ctype_digit($max_multiplier))
  {
    echo "Max-multiplier must be an integer";
    $input=false;
  }

  if($min_multiplicand > $max_multiplicand)
  {
    echo "Min-multiplicand is larger than max-multiplicand";
    $input=fals;
  }

  if($min_multiplier > $max_multiplier)
  {
    echo "Min-multiplier is larger than max-multiplier";
    $input=fals;
  }

  if($input==true)
  {
    $wide = $max_multiplier - $min_multiplier + 2;
    $tall = $max_multiplicand - $min_multiplicand + 2;

    echo "<table> <thead> <tr> <td></td>";
    for($x=0; $x<$wide; $x++)
    {
      echo "<th>$x</th>";
    }
    echo "</thead> <tbody> <td>";
      for($y=0; $y<tall; $y++)
      {
        echo "<td>";
        echo $x*$y;
        echo "</td>";
      }
      echo "</table>";

  }
  ?>
