<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$rename_new_name = mysqli_real_escape_string($connection,$_POST["rename_new_name"]);
@$rename_name = mysqli_real_escape_string($connection,$_POST["rename_name"]);
@$rename_type = mysqli_real_escape_string($connection,$_POST["rename_type"]);
@$rename_folder_key = mysqli_real_escape_string($connection,$_POST["rename_folder_key"]);
@$rename_file_key = mysqli_real_escape_string($connection,$_POST["rename_file_key"]);
@$user_id = $_SESSION['T3_SESSION_ID'];

if(empty($rename_new_name) || empty($rename_name)){
	echo "Some Error";
}
else{
	if($rename_type == "folders"){
		$check_for_exist = mysqli_query($connection, "SELECT * from folders WHERE name='$rename_new_name' AND user_id='$user_id'");
		if(mysqli_num_rows($check_for_exist) > 0){
			echo "exists";
		}
		else{
			$change_name = "UPDATE folders SET name='$rename_new_name' WHERE user_id='$user_id' AND folder_key='$rename_folder_key' ";
			if(mysqli_query($connection,$change_name)){
				echo true;
			}
			else echo false;
		}
	}
	else{

		$get_ext = mysqli_query($connection, "SELECT * from $rename_type WHERE file_key='$rename_file_key'");
		$row = mysqli_fetch_assoc($get_ext);
		$got_extn = $row['extension'];
		$check_name = $rename_new_name.".".$got_extn;
		if($rename_type == "files"){
			$check_for_exist = mysqli_query($connection, "SELECT * from $rename_type WHERE name='$check_name' AND user_id='$user_id' AND folder_key='$rename_folder_key'");
		}
		else {
			$check_for_exist = mysqli_query($connection, "SELECT * from $rename_type WHERE name='$check_name' AND user_id='$user_id'");
		}
		if(mysqli_num_rows($check_for_exist) > 0){
			echo "exists";
		}
		else{
			$get_details = mysqli_query($connection, "SELECT * from $rename_type WHERE file_key='$rename_file_key'");
			$row = mysqli_fetch_assoc($get_details);
			if($rename_type == "files")$folder_key = $row['folder_key'];
			$location = $row['location'];
			$extension = $row['extension'];
			$new_name = $rename_new_name.".".$extension;
			if($rename_type == "files"){
				if(empty($folder_key))@$new_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/106a6c24/";
				else @$new_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/".$folder_key."/";
			}
			else $new_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("photos"),0,10)."/";
			$new_location = $new_location.$new_name;

			$insert = "UPDATE $rename_type SET name='$new_name',location='$new_location' WHERE file_key='$rename_file_key'";
			if(mysqli_query($connection,$insert) && rename("../".$location, "../".$new_location)){
				echo true;
			}
			else echo false;
		}
	}
}	

//t3nsor Rename Script v1.0
//Omkar Prabhu
?>