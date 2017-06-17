<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Functions</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
function addNumbers($number1, $number2){
	$sum = $number1 + $number2;

	return $sum;
}

 $result = addNumbers(34,64);
 echo "This is Value = " .$result;

 $result = addNumbers(100,$result);

 echo "<br>This is New Value = " .$result;

?>	
</body>
</html>