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



function greeting($message){
	echo $message;
}
/**
 * @param  $number1
 * @param  $number2
 * @return $sum
 */	
function calculate($number1, $number2){

	$sum =  $number1+$number2;

	echo $sum;
}

function getSum(){
	
}
greeting("Panupong<br>");

calculate(10 ,10);



?>	
</body>
</html>