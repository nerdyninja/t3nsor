<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$old_pw = $_POST["old_pw"];
@$new_pw = $_POST["new_pw"];
$user_id = $_SESSION['T3_SESSION_ID'];

if(empty($old_pw) || empty($new_pw)){
	echo "Some Error";
}
else{
	$check = mysqli_query($connection, "SELECT * from users WHERE id='$user_id'");
	$row = mysqli_fetch_assoc($check);
	if($row['password'] != $old_pw){
		echo 'wrong';
	}
	else{
		$update = "UPDATE users SET password='$new_pw' WHERE id='$user_id'";
		if(mysqli_query($connection, $update)){
			echo true;
		}
		else echo false;
	}
}

?>