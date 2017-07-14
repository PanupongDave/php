<?php 

function ViewAllUsers(){
	global $connection;

	$query = "SELECT * FROM users";
	$select_users = mysqli_query($connection,$query);

	while($row = mysqli_fetch_assoc($select_users)){
		$user_id = $row['user_id'];
		$username = $row['username'];
		$user_password = $row['user_password'];
		$user_firstname = $row['user_firstname'];
		$user_lastname = $row['user_lastname'];
		$user_email = $row['user_email'];
		$user_image = $row['user_image'];
		$user_role = $row['user_role'];

		echo "<tr>";
		echo "<td>$user_id</td>";
		echo "<td>$username</td>";
		echo "<td>$user_firstname</td>";
		echo "<td>$user_lastname</td>";
		echo "<td>$user_email</td>";
		echo "<td>$user_role</td>";
		echo "<td><a href='users.php?change_admin=$user_id'>Admin</a></td>";
		echo "<td><a href='users.php?change_subscriber=$user_id'>Subscriber</a></td>";
		echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>";

		echo "</tr>";
	}
}

function createUser(){
	global $connection;

	if(isset($_POST['create_user'])){
		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$user_password = mysqli_real_escape_string($connection,$_POST['user_password']);
		$user_firstname =  mysqli_real_escape_string($connection,$_POST['user_firstname']);
		$user_lastname = mysqli_real_escape_string($connection,$_POST['user_lastname']);
		$user_email = mysqli_real_escape_string($connection,$_POST['user_email']);
		$user_role = mysqli_real_escape_string($connection,$_POST['user_role']);

		$query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_role) ";
		$query .= "VALUES('{$username}', '{$user_password}', '{$user_firstname}', '{$user_lastname}', '{$user_email}', '{$user_role}') ";

		$create_user = mysqli_query($connection, $query);

		if(!$create_user){
                // die('QUERY FAILED'. mysql_error($connection));
                echo "Error: " . $query . "<br>" . $connection->error;
         }else{
         		echo "<div class='alert alert-success'>
  				<strong>Success!</strong> Created User.
				</div>";
         }


	
	}
}

function deleteUser(){
	global $connection;

	if(isset($_GET['delete'])){

	  $the_user_id = $_GET['delete'];

	  $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
	  $delete_query = mysqli_query($connection, $query);
	  header("location: users.php");

	}
}

function ChangeRole(){
	global $connection;

	if(isset($_GET['change_admin'])){
		$the_user_id = $_GET['change_admin'];

		$query = "UPDATE users SET ";
		$query .= "user_role = 'admin' ";
		$query .= "WHERE user_id = $the_user_id ";

		$update_role = mysqli_query($connection, $query);

		if(!$update_role){
			echo "Error: " . $query . "<br>" . $connection->error;
		}
		header("location: users.php");
	} if(isset($_GET['change_subscriber'])){
		$the_user_id = $_GET['change_subscriber'];

		$query = "UPDATE users SET ";
		$query .= "user_role = 'subscriber' ";
		$query .= "WHERE user_id = $the_user_id ";

		$update_role = mysqli_query($connection, $query);

		if(!$update_role){
			echo "Error: " . $query . "<br>" . $connection->error;
		}
		header("location: users.php");
	}
}


?>