<?php 

print_r($_GET);

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
<?php $id=300; 
	  $button = "Click Me Now"; 
?>
	<a href="get.php?id=<?php echo $id ?>" ><?php echo $button ?></a>

</body>
</html>