<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Scope</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php

$x = "outside"; //global

function convert(){
	global $x;
	$x = "inside"; //local
}

echo $x;
echo "<br>";
convert();

echo $x;

echo $x;

?>	
</body>
</html>