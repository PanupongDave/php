<?php 

function ViewAllComments(){
	global $connection;

	$query = "SELECT * FROM comments";
	$select_comments = mysqli_query($connection,$query);

	while($row = mysqli_fetch_assoc($select_comments)){
		$comment_id = $row['comment_id'];
		$comment_post_id = $row['comment_post_id'];
		$comment_author = $row['comment_author'];
		$comment_email = $row['comment_email'];
		$comment_content = $row['comment_content'];
		$comment_status = $row['comment_status'];
		$comment_date = $row['comment_date'];

		echo "<tr>";

		echo "<td>$comment_id</td>";
		echo "<td>$comment_author</td>";
		echo "<td>$comment_content</td>";
		echo "<td>$comment_email</td>";
		echo "<td>$comment_status</td>";

		$query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
		$select_title = mysqli_query($connection,$query);

		while($row = mysqli_fetch_assoc($select_title)){
			$post_id = $row['post_id'];
			$comment_post_title = $row['post_title'];
			echo "<td><a href='../post.php?p_id=$post_id'>$comment_post_title </a></td>";
		}

		


		echo "<td>$comment_date</td>";
		echo "<td><a href='./comments.php?approve=$comment_id'>Approve</a></td>";
        echo "<td><a href='./comments.php?unapprove=$comment_id'>Unapprove</a></td>";
        echo "<td><a href='./comments.php?delete=$comment_id&post_id=$comment_post_id'>Delete</a></td>";
        

		echo "</tr>";
	}
}

function deleteComments(){
	global $connection;

	if(isset($_GET['delete']) && isset($_GET['post_id'])){
		$the_comment_id = $_GET['delete'];
		$select_post_id = $_GET['post_id'];

		$query = "DELETE FROM comments WHERE comment_id = $the_comment_id";
		$delete_query = mysqli_query($connection,$query);

		commentCount($select_post_id);
		header("location: comments.php");
	}

}

function insertComments($the_post_id){
	global $connection;

   	if(isset($_POST['create_comment'])){

       $comment_author = mysqli_real_escape_string($connection,$_POST['comment_author']);
       $comment_email = mysqli_real_escape_string($connection,$_POST['comment_email']);
       $comment_content = mysqli_real_escape_string($connection,$_POST['comment_content']);
     

	       $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
	       $query .= "VALUES ($the_post_id ,'{$comment_author}', '{$comment_email}', '{$comment_content}', 'approved', now()) ";

	       $create_comment = mysqli_query($connection, $query);

	        if(!$create_comment){
	            // die('QUERY FAILED'. mysql_error($connection));
	            echo "Error: " . $query . "<br>" . $connection->error;
	        }
	       
        
       
        
       header("location: post.php?p_id=$the_post_id");
    }

}

function Approve(){
    global $connection;
    if(isset($_GET['approve'])){
		$the_comment_id = $_GET['approve'];

		$query = "UPDATE comments SET ";
		$query .= "comment_status = 'approved' ";
		$query .= "WHERE comment_id = $the_comment_id";

		$update_approve = mysqli_query($connection,$query);
		if(!$update_approve ){
			echo "Error: " . $query . "<br>" . $connection->error;
		}
		header("location: comments.php");
	} else if(isset($_GET['unapprove'])){
		$the_comment_id = $_GET['unapprove'];

		$query = "UPDATE comments SET ";
		$query .= "comment_status = 'unapproved' ";
		$query .= "WHERE comment_id = $the_comment_id";
		$update_approve = mysqli_query($connection,$query);
		if(!$update_approve ){
			echo "Error: " . $query . "<br>" . $connection->error;
		}
		header("location: comments.php");
	}
    
}

function commentCount($the_post_id){
    global $connection;
    $post_comment_count = countComment($the_post_id);

    $query = "UPDATE posts SET post_comment_count = $post_comment_count ";
    $query .= "WHERE post_id = $the_post_id ";

    $update_comment_count = mysqli_query($connection,$query);

    if(!$update_comment_count){
        // die('QUERY FAILED'. mysql_error($connection));
        echo "Error: " . $query . "<br>" . $connection->error;
    }

}

function countComment($post_id){
    global $connection;
    $result = 0;

    $query = "SELECT COUNT(comment_id) AS comment_count ";
    $query .= "FROM comments ";
    $query .= "WHERE comment_post_id = $post_id ";

    $select_count_comment = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_count_comment)){
        $result = $row['comment_count'];
    }

    return $result;
}




?>