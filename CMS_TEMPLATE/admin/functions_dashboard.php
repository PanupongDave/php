<?php 

function CountPosts(){
	global $connection;

	$query = "SELECT * FROM posts";
	$select_all_post = mysqli_query($connection,$query);
	$post_counts = mysqli_num_rows($select_all_post);

	return $post_counts;
}

function CountPostsActive(){
	global $connection;

	$query = "SELECT * FROM posts WHERE post_status = 'published' ";
	$select_all_post = mysqli_query($connection,$query);
	$post_counts = mysqli_num_rows($select_all_post);

	return $post_counts;
}

function CountPostsDraft(){
	global $connection;

	$query = "SELECT * FROM posts WHERE post_status = 'draft' ";
	$select_all_post = mysqli_query($connection,$query);
	$post_counts = mysqli_num_rows($select_all_post);

	return $post_counts;
}



function CountComments(){
	global $connection;

	$query = "SELECT * FROM comments";
	$select_all_comment = mysqli_query($connection,$query);
	$comment_counts = mysqli_num_rows($select_all_comment);

	return $comment_counts;
}

function CountCommentsApproved(){
	global $connection;

	$query = "SELECT * FROM comments WHERE comment_status = 'approved' ";
	$select_all_comment = mysqli_query($connection,$query);
	$comment_counts = mysqli_num_rows($select_all_comment);

	return $comment_counts;
}

function CountCommentsUnapproved(){
	global $connection;

	$query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
	$select_all_comment = mysqli_query($connection,$query);
	$comment_counts = mysqli_num_rows($select_all_comment);

	return $comment_counts;
}

function CountUsers(){
	global $connection;

	$query = "SELECT * FROM users";
	$select_all_user = mysqli_query($connection,$query);
	$user_counts = mysqli_num_rows($select_all_user);

	return $user_counts;
}

function CountUsersAdmin(){
	global $connection;

	$query = "SELECT * FROM users WHERE user_role = 'admin' ";
	$select_all_user = mysqli_query($connection,$query);
	$user_counts = mysqli_num_rows($select_all_user);

	return $user_counts;
}

function CountUsersSubscriber(){
	global $connection;

	$query = "SELECT * FROM users WHERE user_role = 'subscriber' ";
	$select_all_user = mysqli_query($connection,$query);
	$user_counts = mysqli_num_rows($select_all_user);

	return $user_counts;
}

function CountCategories(){
	global $connection;

	$query = "SELECT * FROM categories";
	$select_all_category = mysqli_query($connection,$query);
	$category_counts = mysqli_num_rows($select_all_category);

	return $category_counts;
}

?>