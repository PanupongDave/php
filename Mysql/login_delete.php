<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteRows(); ?>		
<?php include "includes/header.php"; ?>

		<div class="container" style="margin-top: 20px;">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="text-center">FormDelete</h3>
						</div>
						<div class="panel-body">
							<form class="form" method="post" action="login_delete.php">
								<div class="form-group">
									<label > Username </label>
									<input type="text" class="form-control" name="username" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label> Password </label>
									<input type="password" class="form-control" name="password" placeholder="Enter Password">
								</div>

								<div class="form-group">
									<select name="id">
										<?php showAllData(); ?>					
									</select>
								</div>

								<div class="form-group">
									<label></label>
									<button type="submit" class="btn btn-primary" name="submit">DELETE</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include "includes/footer.php"; ?>
