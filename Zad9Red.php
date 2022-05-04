<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Софтуерни продукти</title>
  </head>
  <body>

<h1>Заплати</h1>
<?php 
$ime=$_REQUEST["slujitel"];


$s = 0;



echo "Име на служител: " . $ime;

if(!empty($_REQUEST["r1"]) && ($_REQUEST["r1"] == "rak")){
  $s = 1000;
  echo "<p>Ръководител по щат: 1000 лева.</p>";
}elseif(!empty($_REQUEST["r1"]) && ($_REQUEST["r1"] == "sat")){
  $s = 600;
  echo "<p>Сътрудник по щат: 600 лева.</p>";
}elseif(!empty($_REQUEST["r1"]) && ($_REQUEST["r1"] == "spez")){
  $s = 800;
  echo "<p>Специалист по щат: 800 лева.</p>";
}elseif(!empty($_REQUEST["r1"]) && ($_REQUEST["r1"] == "dr")){
  $s = 500;
  echo "<p>Друг по щат: 500 лева.</p>";
}

if(!empty($_REQUEST["s1"]) && ($_REQUEST["s1"] == "g5")){
  $s += 0.04 * $s;
  echo "<p>Надбавката за 0-5 години е 4%</p>";
}elseif(!empty($_REQUEST["s1"]) && ($_REQUEST["s1"] == "g12")){
  $s += 0.07 * $s;
  echo "<p>Надбавката за 6-12 години е 7%</p>";
}elseif(!empty($_REQUEST["s1"]) && ($_REQUEST["s1"] == "g22")){
  $s += 0.11 * $s;
  echo "<p>Надбавката за 13-22 години е 11%</p>";
}elseif(!empty($_REQUEST["s1"]) && ($_REQUEST["s1"] == "g23")){
  $s += 0.16 * $s;
  echo "<p>Надбавката за над 22 години е 16%</p>";
}

$s = round($s,2);
$u = 0.15 * $s;

$s -= $u;

$s = round($s,2);
echo "<p> Крайната заплата с удръжки е ". $s . " лева.";

?>




</body>
</html>
