<?php 

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*1); // second * minute * hours * days

setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php

if(isset($_COOKIE["SomeName"])){

	$someOne = $_COOKIE["SomeName"];

	echo $someOne;

} else {

	$someOne = "";

}

?>	
</body>
</html>