<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

$files = "";
$message_file = '';
$count_file = 0;
$exists = 0;

//When Upload Files Form is submitted, do this--->
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["files"]))
{	

	//Get Form Details
	$folder_key = $_POST["folder_key"];
	@$user_id = $_SESSION['T3_SESSION_ID'];
	
	//Start Looping
	foreach ($_FILES['files']['name'] as $i => $file_lele) {     
	    if ($_FILES['files']['error'][$i] == 4) {
	        continue;
	    }	       
	    if ($_FILES['files']['error'][$i] == 0) {	           
	        	
	    	//Get File Details
	    	@$user_id = $_SESSION['T3_SESSION_ID'];
	    	@$get_file = $_FILES['files']['tmp_name'][$i];
	    	@$file_name = $_FILES['files']['name'][$i];
	    	@$file_size = $_FILES['files']['size'][$i];
	    	@$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
	    	@$file_type = mime_content_type($get_file);
	    	@$file_key = substr(md5(rand()), 0, 5);
	    	if(empty($folder_key))@$file_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/106a6c24/";
			else @$file_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("files"),0,10)."/".$folder_key."/";
	    	@$file_location = @$file_location.@$file_name;
	    	@$created_at = time();

	    	//Check if file exists
	    	if(file_exists($file_location)){
	    		$exists ++;
	    	}
	    	else{
	    		//If file does not exists, upload and insert details
	    		//Insert Details into Database
		    	$insert_file_details = "INSERT into files(user_id,name,size,extension,location,type,file_key,folder_key,created_at)
		    										VALUES('$user_id', '$file_name', '$file_size', '$file_extension', '$file_location', '$file_type', '$file_key', '$folder_key', '$created_at')";
		    	if(move_uploaded_file($get_file, $file_location) && mysqli_query($connection, $insert_file_details)){
		    		$count_file++;
		    	}

	    	}
	    	
	    }

	}
				//After Upload Messages--->
				//If one file not uploaded because it exists
				if($count_file == 0 && $exists == "1"){
		    		$message_file = '<div id="notify-wrapper" > 
			<span id="notify" class="server-warning" style="opacity: 1;"> 
	            <span id="notify-msg"><b>'.$file_name.'</b> already exists!</span>
	        </span>
		</div>';
		    	}
		    	//If many files not uploaded because they exist
		    	else if($count_file == 0 && $exists > 1){
		    		$message_file = '<div id="notify-wrapper" > 
			<span id="notify" class="server-warning" style="opacity: 1;"> 
	            <span id="notify-msg">Files selected already exists!</span>
	        </span>
		</div>';
		    	}
		    	//If no file uploaded
				else if($count_file == 0){
		    		$message_file = '<div id="notify-wrapper" > 
			<span id="notify" class="server-error" style="opacity: 1;"> 
	            <span id="notify-msg">Files cannot be uploaded!</span>
	        </span>
		</div>';
		    	}
		    	//If one file uploaded
		    	else if($count_file == 1){
		    		$message_file = '<div id="notify-wrapper" > 
			<span id="notify" class="server-success" style="opacity: 1;"> 
	            <span id="notify-msg"><b>'.$file_name.'</b> uploaded successfully!</span>
	        </span>
		</div>';
		    	}
		    	//If many files uploaded, return with count
		    	else if($count_file > 1){
		    		$message_file = '<div id="notify-wrapper" > 
			<span id="notify" class="server-success" style="opacity: 1;"> 
	            <span id="notify-msg">'.$count_file.' files uploaded successfully!</span>
	        </span>
		</div>';
		    	}
		    	//Solve Reload Submission Bug
		    	$_FILES["files"] = "";
				$files = "";
				$exists = 0;
				$_SERVER["REQUEST_METHOD"] == "";
}


//t3nsor Upload Script 1.0
//Omkar Prabhu 
?>