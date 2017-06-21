<?php 

$name = "SomeName";
$value = array('juanria','maria', 'jose');
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


?>	
</body>
</html>