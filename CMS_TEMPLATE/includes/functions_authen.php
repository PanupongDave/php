<?php 

function loginUser(){

	global $connection;


	if(isset($_POST['login'])){
	 
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		$query = "SELECT * FROM users WHERE username = '{$username}' ";
		$select_user_query = mysqli_query($connection,$query);
		if(!$select_user_query){
			die("QUERY FAILED". mysqli_error($connection));
		}

		while($row = mysqli_fetch_assoc($select_user_query)){
			 $username_query = $row['username'];
			 $password_query = $row['user_password'];
			 $user_firstname = $row['user_firstname'];
			 $user_lastname = $row['user_lastname'];
			 $user_email = $row['user_email'];
			 $user_role = $row['user_role'];
		}

		if(isset($username_query)){
			if($password == $password_query ){
			
					$_SESSION['username']  = $username_query;
					$_SESSION['user_firstname']  = $user_firstname;
					$_SESSION['user_lastname']  = $user_lastname;
					$_SESSION['user_email']  = $user_email;
					$_SESSION['user_role']  = $user_role;

					header("location: ../admin");
					
			}else {
				echo "Password Incorrect!";
			}
		}else {
			header("location: ../index.php");
		}	
	}
}

function logoutUser(){
					$_SESSION['usernmae']  = null;
					$_SESSION['user_firstname']  = null;
					$_SESSION['user_lastname']  = null;
					$_SESSION['user_email']  = null;
					$_SESSION['user_role']  = null;

			 header("location: ../index.php");
}

?>