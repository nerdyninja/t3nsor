<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';

$photos = "";
$message_photo = '';
$count_photo = 0;
$exists = 0;

//When Upload Photos Form is submitted, do this--->
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photos"]))
{	

	//Get Form Details
	@$user_id = $_SESSION['T3_SESSION_ID'];
	//Start Looping
	foreach ($_FILES['photos']['name'] as $i => $photo_lele) {     
	    if ($_FILES['photos']['error'][$i] == 4) {
	        continue;
	    }	       
	    if ($_FILES['photos']['error'][$i] == 0) {	           
	        	
	    	//Get File Details
	    	@$user_id = $_SESSION['T3_SESSION_ID'];
	    	@$get_photo = $_FILES['photos']['tmp_name'][$i];
	    	@$photo_name = $_FILES['photos']['name'][$i];
	    	@$photo_size = $_FILES['photos']['size'][$i];
	    	@$photo_extension = pathinfo($photo_name, PATHINFO_EXTENSION);
	    	@$photo_type = mime_content_type($get_photo);
	    	@$photo_key = substr(md5(rand()), 0, 5);
			@$photo_location = "cdn-xxx/".substr(md5($user_id),0,6)."/".substr(md5("photos"),0,10)."/";
	    	@$photo_location = @$photo_location.@$photo_name;
	    	@$created_at = time();
	    	list($width, $height) = getimagesize($get_photo);
	    	@$photo_time = "";
	    	//Check if file exists
	    	if(file_exists($photo_location)){
	    		$exists ++;
	    	}
	    	else{
	    		//If file does not exists, upload and insert details
	    		//Insert Details into Database
		    	$insert_file_details = "INSERT into photos(user_id,name,size,extension,location,type,file_key,created_at,width,height,photo_time)
		    										VALUES('$user_id', '$photo_name', '$photo_size', '$photo_extension', '$photo_location', '$photo_type', '$photo_key', '$created_at', '$width', '$height', '$photo_time')";
		    	if(move_uploaded_file($get_photo, $photo_location) && mysqli_query($connection, $insert_file_details)){
		    		$count_photo++;
		    	}

	    	}
	    	
	    }

	}
				//After Upload Messages--->
				//If one file not uploaded because it exists
				if($count_photo == 0 && $exists == "1"){
		    		$message_photo = '<div id="notify-wrapper" > 
			<span id="notify" class="server-warning" style="opacity: 1;"> 
	            <span id="notify-msg"><b>'.$photo_name.'</b> already exists!</span>
	        </span>
		</div>';
		    	}
		    	//If many photos not uploaded because they exist
		    	else if($count_photo == 0 && $exists > 1){
		    		$message_photo = '<div id="notify-wrapper" > 
			<span id="notify" class="server-warning" style="opacity: 1;"> 
	            <span id="notify-msg">Photos selected already exists!</span>
	        </span>
		</div>';
		    	}
		    	//If no file uploaded
				else if($count_photo == 0){
		    		$message_photo = '<div id="notify-wrapper" > 
			<span id="notify" class="server-error" style="opacity: 1;"> 
	            <span id="notify-msg">Photos cannot be uploaded!</span>
	        </span>
		</div>';
		    	}
		    	//If one file uploaded
		    	else if($count_photo == 1){
		    		$message_photo = '<div id="notify-wrapper" > 
			<span id="notify" class="server-success" style="opacity: 1;"> 
	            <span id="notify-msg"><b>'.$photo_name.'</b> uploaded successfully!</span>
	        </span>
		</div>';
		    	}
		    	//If many photos uploaded, return with count
		    	else if($count_photo > 1){
		    		$message_photo = '<div id="notify-wrapper" > 
			<span id="notify" class="server-success" style="opacity: 1;"> 
	            <span id="notify-msg">'.$count_photo.' photos uploaded successfully!</span>
	        </span>
		</div>';
		    	}
		    	//Solve Reload Submission Bug
		    	$_FILES["photos"] = "";
				$photos = "";
				$exists = 0;
				$_SERVER["REQUEST_METHOD"] == "";
}


//t3nsor Upload Script 1.0
//Omkar Prabhu 
?>