<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

@$delete_name = mysqli_real_escape_string($connection,$_POST["delete_name"]);
@$delete_type = mysqli_real_escape_string($connection,$_POST["delete_type"]);
@$delete_folder_key = mysqli_real_escape_string($connection,$_POST["delete_folder_key"]);
@$delete_file_key = mysqli_real_escape_string($connection,$_POST["delete_file_key"]);
@$id = $_SESSION['T3_SESSION_ID'];

if(empty($delete_name)){
	echo "Some Error";
}
else{
	if($delete_type == "folders"){
		$check_for_exist = mysqli_query($connection, "SELECT * from folders WHERE folder_key='$delete_folder_key'");
		if(mysqli_num_rows($check_for_exist) > 0){

			$select_inside = mysqli_query($connection, "SELECT * from files WHERE folder_key='$delete_folder_key'");
			while($row = mysqli_fetch_assoc($select_inside)){
				$inside_loc = $row["location"];
				unlink("../".$inside_loc);
				$delete_inside = mysqli_query($connection, "DELETE from files WHERE folder_key='$delete_folder_key'");
				//Error not needed
			}

			$delete_folder = "DELETE from folders WHERE folder_key='$delete_folder_key'";
			$del_fol_loc = "../cdn-xxx/".substr(md5($id),0,6)."/".substr(md5("files"),0,10)."/".$delete_folder_key;
			if(rmdir($del_fol_loc) && mysqli_query($connection,$delete_folder)){
				echo true;
			}
			else echo false;
		}
		else{
			 echo false;
		}
	}
	else{
		$check_for_exist = mysqli_query($connection, "SELECT * from $delete_type WHERE file_key='$delete_file_key'");
		if(mysqli_num_rows($check_for_exist) > 0){
			$row = mysqli_fetch_assoc($check_for_exist);
			$location = $row['location'];
			
			$delete = "DELETE from $delete_type WHERE file_key='$delete_file_key'";
			if(mysqli_query($connection,$delete) && unlink("../".$location)){
				echo true;
			}
			else echo false;
		}
	}
}	

//t3nsor Delete Script v1.0
//Omkar Prabhu
?>