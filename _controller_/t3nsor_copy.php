<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$copy_new_folder_key = mysqli_real_escape_string($connection,$_POST["copy_new_folder_key"]);
@$copy_name = mysqli_real_escape_string($connection,$_POST["copy_name"]);
@$copy_type = mysqli_real_escape_string($connection,$_POST["copy_type"]);
@$copy_folder_key = mysqli_real_escape_string($connection,$_POST["copy_folder_key"]);
@$copy_file_key = mysqli_real_escape_string($connection,$_POST["copy_file_key"]);
@$user_id = $_SESSION['T3_SESSION_ID'];

if(empty($copy_name) || empty($copy_file_key)){
	echo "Some Error";
}
else{
	$check_for_exist = mysqli_query($connection, "SELECT * from files WHERE file_key='$copy_file_key'");
	if(mysqli_num_rows($check_for_exist) > 0){

		$row = mysqli_fetch_assoc($check_for_exist);
		$old_location = $row["location"];
		$file_size = $row["size"];
		$file_extension = $row["extension"];
		$file_name = $row["name"];
		$file_type = $row["type"];
		$file_key = substr(md5(uniqid()),0,5);
		if($copy_new_folder_key == "106a6c24")$folder_key = "";
		else $folder_key = $copy_new_folder_key;
		$created_at = time();
		$new_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/".$copy_new_folder_key."/".$copy_name;

		if(file_exists("../".$new_location)){
			echo "exists";
		}
		else{
			$update = "INSERT into files(user_id,name,size,extension,location,type,file_key,folder_key,created_at)
		    										VALUES('$user_id', '$file_name', '$file_size', '$file_extension', '$new_location', '$file_type', '$file_key', '$folder_key', '$created_at')";
			if(copy("../".$old_location, "../".$new_location) && mysqli_query($connection,$update)){
				echo true;
			}
			else echo false;
		}
	}
	else{
		echo false;
	}
}	

//t3nsor Copy Script v1.0
//Omkar Prabhu
?>