<?php insert_post(); ?>


<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="post_title">Post title</label>
		<input type="text" name="post_title" class="form-control">
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
		<input type="text" name="post_author" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="post_image">
	</div>

	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input type="text" name="post_tags" class="form-control">
	</div>
	<div class="form-group">
		<label for="post_content">Post content</label>
		<textarea class="form-control" rows="10" cols="30" name="post_content" id=""></textarea>
	</div>
	<div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>

</form>