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
	$numberList = array(267,8765,345,'5345', 345, '<h1>Hello</h1>');
	echo $numberList[0];
	echo "<br>";
	echo $numberList[1];
	echo "<br>";
	echo $numberList[2];
	echo "<br>";
	echo $numberList[3];
	echo "<br>";
	echo $numberList[4];
	echo "<br>";
	echo $numberList[5];
	echo "<br>";

	print_r($numberList);
?>
</body>
</html>