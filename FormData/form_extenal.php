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
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>FormBasic</h3>
						</div>
						<div class="panel-body">
							<form class="form" method="post" action="form_process.php">
								<div class="form-group">
									<label > Username </label>
									<input type="text" class="form-control" name="username" placeholder="Enter Usernmae">
								</div>
								<div class="form-group">
									<label> Password </label>
									<input type="password" class="form-control" name="password" placeholder="Enter Password">
								</div>								
								<div class="form-group">
									<label></label>
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<?php
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>