<?php

	$connection = mysqli_connect('localhost', 'root','' , 'loginapp');
		if($connection){
			echo "We are connected";
		} else {
			die("connection fail");
		}

		$query = "SELECT * FROM users ";
		

		$result = mysqli_query($connection, $query);

		if(!$result){
			die('Query FAILED'.msqli_error());
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container" style="margin-top: 20px;">
			<div class="col-sm-6">
				
				<?php
				while($row = mysqli_fetch_assoc($result)){
				?>	
						
				<pre>
				<?php
					print_r($row);
				?>
				</pre>

				<?php 
				}
				?>

			</div>		
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>