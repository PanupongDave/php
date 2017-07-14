<?php createUser(); ?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
		<label for="post_author">Firstname</label>
		<input type="text" name="user_firstname" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_status">Lastname</label>
		<input type="text" name="user_lastname" class="form-control">
	</div>

	<div class="form-group">
		<label for="user_role">Role:</label>
		<select name="user_role" id="">
			<option value="subscriber">Select option</option>
			<option value="admin">Admin</option>
			<option value="subscriber">Subscriber</option>
		</select>
	</div>


	

<!-- 	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="post_image">
	</div> -->

	<div class="form-group">
		<label for="post_tags">Useranme</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label for="post_content">Email</label>
		<input type="email" name="user_email" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_content">Password</label>
		<input type="password" name="user_password" class="form-control">
	</div>


	<div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>

</form>