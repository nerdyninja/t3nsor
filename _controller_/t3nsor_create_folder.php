<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$folder_name = mysqli_real_escape_string($connection,$_POST["folder_name"]);
@$id = $_SESSION['T3_SESSION_ID'];

if(empty($folder_name)){
	echo "Some Error";
}
else{
	//Check if folder exists
	$check_for_exist = mysqli_query($connection,"SELECT * from folders WHERE name='$folder_name' AND user_id='$id'");
	if(mysqli_num_rows($check_for_exist) > 0){
		echo "exists";
	}
	else{
		//Get ready the details
		$user_id 	= $_SESSION['T3_SESSION_ID'];
		$folder_key = substr(md5(uniqid()), 0, 8);
		$created_at = time();
		$location 	= substr(md5($user_id),0,6).'/'.substr(md5("files"), 0, 10);

		//Insert into Database
		$insert_folder = "INSERT into folders(user_id,name,folder_key,created_at)VALUES('$user_id', '$folder_name', '$folder_key', '$created_at')";
		if(mysqli_query($connection,$insert_folder) && mkdir('../cdn-xxx/'.$location.'/'.$folder_key , 0777)){
			echo true;
		}
		else echo false;
	}
}

//t3nsor Create Folder Script v1.0
//Omkar Prabhu
?>