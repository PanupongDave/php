<?php 

echo $_POST['name'];

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

<form action="the_post.php" method="post">
	
	<input type="text" name="name">

	<input type="submit" >

</form>

</body>
</html>