<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$move_new_folder_key = mysqli_real_escape_string($connection,$_POST["move_new_folder_key"]);
@$move_name = mysqli_real_escape_string($connection,$_POST["move_name"]);
@$move_type = mysqli_real_escape_string($connection,$_POST["move_type"]);
@$move_folder_key = mysqli_real_escape_string($connection,$_POST["move_folder_key"]);
@$move_file_key = mysqli_real_escape_string($connection,$_POST["move_file_key"]);
@$user_id = $_SESSION['T3_SESSION_ID'];

if(empty($move_name) || empty($move_file_key)){
	echo "Some Error";
}
else{
	$check_for_exist = mysqli_query($connection, "SELECT * from files WHERE file_key='$move_file_key'");
	if(mysqli_num_rows($check_for_exist) > 0){

		$row = mysqli_fetch_assoc($check_for_exist);
		$old_location = $row["location"];
		$new_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/".$move_new_folder_key."/".$move_name;

		if(file_exists("../".$new_location)){
			echo "exists";
		}
		else{
			if($move_new_folder_key == "106a6c24")$up_key = "";
			else $up_key = $move_new_folder_key;
			$update = "UPDATE files set location='$new_location',folder_key='$up_key' WHERE file_key='$move_file_key'";
			if(rename("../".$old_location, "../".$new_location) && mysqli_query($connection,$update)){
				echo true;
			}
			else echo false;
		}
	}
	else{
		echo false;
	}
}	

//t3nsor Move Script v1.0
//Omkar Prabhu
?>