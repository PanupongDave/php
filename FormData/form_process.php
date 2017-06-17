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
if(isset($_POST['submit'])){
$name = array("Edwin", "Student", "Peter", "Samid", "Mohad","Maria", "Jane", "tom");
		$minimun = 5;
		$maximun = 10;
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(strlen($username) < $minimun){
		echo "<h1>Username has to be longer than Five</h1>";
	}
	if(strlen($username) > $maximun){
		echo "<h1>Username cannot be longer than ten</h1> ";
	}

	if(!in_array($username,$name)){
		echo "Sorry you are not allowed";
	}else {
		echo "Welcome";
	}
	// echo "Hello".$username;
	// echo "Your Password is " .$password;
}
?>


	
</body>
</html>