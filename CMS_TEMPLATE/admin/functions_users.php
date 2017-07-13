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
		echo "<td><a href='users.php?approve='>Approve</a></td>";
		echo "<td><a href='users.php?unapprove='>Unapprove</a></td>";
		echo "<td><a href='users.php?delete='>Delete</a></td>";

		echo "</tr>";
	}
}


?>