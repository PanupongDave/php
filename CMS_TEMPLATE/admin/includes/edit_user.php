<?php 
	if(isset($_POST['update_post'])){
	
		$the_post_id = mysqli_real_escape_string($connection,$_POST['post_id']);
		$post_author = mysqli_real_escape_string($connection,$_POST['post_author']);	
		$post_title = $_POST['post_title'];	
		$post_category_id = $_POST['post_category'];	
		$post_status = $_POST['post_status'];	
		$post_image = $_FILES['post_image']['name'];	
		$post_image_temp = $_FILES['post_image']['tmp_name'];	
		$post_content = $_POST['post_content'];	
		$post_tags = $_POST['post_tags'];

		move_uploaded_file($post_image_temp, "../images/$post_image");

	


		$query = "UPDATE posts SET ";
		$query .="post_title = '{$post_title}', ";
		$query .="post_category_id = {$post_category_id}, ";
		$query .="post_date = now(), ";
		$query .="post_author = '{$post_author}', ";
		$query .="post_status = '{$post_status}', ";
		$query .="post_tags = '{$post_tags}', ";
		$query .="post_content = '{$post_content}', ";
		$query .="post_image = '{$post_image}' ";
		$query .="WHERE post_id = {$the_post_id} ";	

		$update_post = mysqli_query($connection,$query);

		if(!$update_post){
			echo "Error: " . $query . "<br>" . $connection->error;
		}

		
	}

?>

<?php 
	if(isset($_GET['edit'])){
		$post_id = $_GET['edit'];

		$query = "SELECT * FROM posts WHERE post_id = $post_id";
		$select_posts_id = mysqli_query($connection,$query);

		while($row = mysqli_fetch_assoc($select_posts_id)){
			$post_id = $row['post_id'];
			$post_title = $row['post_title'];
			$post_category_id = $row['post_category_id'];
			$post_author = $row['post_author'];
			$post_status = $row['post_status'];
			$post_tags = $row['post_tags'];
			$post_content = $row['post_content'];
			$post_image = $row['post_image']


		?>


<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="post_id" value="<?php if(isset($post_id)){echo $post_id;} ?>">
	<div class="form-group">
		<label for="post_title">Post title</label>
		<input type="text" name="post_title" class="form-control" value="<?php if(isset($post_title)){echo $post_title;} ?>">
	</div>

	
<div class="form-group">
		<select name="user_role" id="">
		<?php 
			$query = "SELECT * FROM users ";
			$select_users = mysqli_query($connection,$query);
			if(!$select_users){
				die('QUERY FAILED'. mysql_error($connection));
			}

			while($row = mysqli_fetch_assoc($select_users)){
				$user_id = $row['user_id'];
				$user_role = $row['user_role'];

				echo "<option value='$user_id'>{$user_role}</option>";
			}

		?>
			
		</select>
</div>


	<div class="form-group">
		<select name="post_category" id="">
		<?php 
			$query = "SELECT * FROM categories ";
			$select_categories = mysqli_query($connection,$query);
			if(!$select_categories){
				die('QUERY FAILED'. mysql_error($connection));
			}

			while($row = mysqli_fetch_assoc($select_categories)){
				$cat_id = $row['cat_id'];
				$cat_title = $row['cat_title'];

				echo "<option value='$cat_id'>{$cat_title}</option>";
			}

		?>
			
		</select>
	</div>

	<div class="form-group">
		<label for="post_author">Post Author</label>
		<input type="text" name="post_author" class="form-control"
		value="<?php if(isset($post_author)){echo $post_author;} ?>">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status: </label>
		<select name="post_status">
			<option value="draft">draft</option>
			<option value="published">published</option>
		</select>
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="post_image">
	</div>

	<div class="form-group">
		<img width="100" src="../images/<?php echo $post_image; ?>" alt="">
	</div>

	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input type="text" name="post_tags" class="form-control"
		value="<?php if(isset($post_tags)){echo $post_tags;} ?>">
	</div>
	<div class="form-group">
		<label for="post_content">Post content</label>
		<textarea class="form-control" rows="10" cols="30" name="post_content" id="" ><?php if(isset($post_content)){echo $post_content;} ?></textarea>
	</div>
	<?php 
    	}
	}
	?>

	<div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Edit Post">
        <a href="./posts.php" class="btn btn-danger" role="button">View Post</a>
    </div>
</form>