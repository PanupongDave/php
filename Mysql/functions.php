<?php 

///////-*-*-*-*- CRUD Functions -*-*-*-*////////////////////////////

//////////////-*-*-*-*-Created Code-*-*-*-*///////////////////////////////
function createRows(){
	if(isset($_POST['submit'])){
		global $connection;

		$username = $_POST['username'];
		$password = $_POST['password'];

		///-*-*-*-* Sscurity Sql injection *-*-*-*///////////////////
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		///////////////////////////////////////////////////////
		
		///// *-*-*- Security Has Format -*-*-*-////////////////////////
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;
		$encript_password = crypt($password,$hashF_and_salt);
		///////////////////////////////////////////////////////////////
		
		$query = "INSERT INTO users(username,password)";
		$query .= "VALUES ('$username','$encript_password')";

		$result = mysqli_query($connection, $query);

		if(!$result){
			die('Query FAILED'.msqli_error());
		}else {
			echo "Record Created";
		}
	}
}
///////////////////////////////////////////////////////////////////////////

////////////*-*-*-* Read All Data Code *-*-*-*////////////////////////////
function showAllRead(){
	global $connection;
	$query = "SELECT * FROM users ";	
	$result = mysqli_query($connection, $query);
	if(!$result){
			die('Query FAILED'.msqli_error());
	}

	while($row = mysqli_fetch_assoc($result)){
		echo "<pre>";
		print_r($row) ;
		echo "</pre>";		
	}
}
////////////////////////////////////////////////////////////////

//////////*--*-*- Read ID Code -*-*-*-*////////////////////////
function showAllData(){
	global $connection;
	$query = "SELECT * FROM users ";	
	$result = mysqli_query($connection, $query);
	if(!$result){
			die('Query FAILED'.msqli_error());
	}

	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		echo "<option value='$id'> $id </option>";
	}
}
//////////////////////////////////////////////////////////////////

/////////////*-*-*-* Update Data Code *-*-*-*-**-*-/////////////////
function UpdateTable(){
	if(isset($_POST['submit'])){
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		///// *-*-*- Security Has Format -*-*-*-////////////////////////
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;
		$encript_password = crypt($password,$hashF_and_salt);
		///////////////////////////////////////////////////////////////

		$query = "UPDATE users SET ";
		$query .= "username = '$username', ";
		$query .= "password = '$encript_password' ";
		$query .= "WHERE id = $id ";



		$result = mysqli_query($connection, $query);
		if(!$result){
			die("QUERY FAILED" . mysqli_error($connection));
		}else{
			echo "Record Updated";
		}
	}
}
////////////////////////////////////////////////////////////////

///////*-*-*-*-* Deleted Data Code -*-*-*-* ///////////////////
function deleteRows(){
	if(isset($_POST['submit'])){
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = "DELETE FROM users ";
		$query .= "WHERE id = $id ";

		$result = mysqli_query($connection, $query);
		if(!$result){
			die("QUERY FAILED" . mysqli_error($connection));
		}else{
			echo "Record Deleted";
		}
	}
}
//////////////////////////////////////////////////////////////////////