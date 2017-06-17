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
// emtyarray
$emlist = array();

$list = [343,34,323,23,54,232,453];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

sort($list);
print_r($list);

// http://php.net/manual/en/ref.array.php


?>	
</body>
</html>