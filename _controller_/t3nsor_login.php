<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';
require_once 'track_info_mod/detect.php';


@$email 	  = mysqli_real_escape_string($connection,$_POST["email"]);
@$password 	  = mysqli_real_escape_string($connection,$_POST["password"]);

if(empty($email) || empty($password)){
	echo "Some Error";
}
else{
	$check_user = mysqli_query($connection,"SELECT * from users WHERE email='$email' AND password='$password'");
	$user = mysqli_fetch_assoc($check_user);
	if(mysqli_num_rows($check_user) > 0){
		if($user['confirm'] == '1'){
			session_regenerate_id();
			$_SESSION['T3_SESSION_ID'] 		 = $user['id'];
			$_SESSION['T3_SESSION_FNAME'] 	 = $user['fname'];
			$_SESSION['T3_SESSION_LNAME'] 	 = $user['lname'];
			$_SESSION['T3_SESSION_EMAIL'] 	 = $user['email'];
			$_SESSION['T3_SESSION_PASSWORD'] = $user['password'];
			$_SESSION['T3_SESSION_KEY'] 	 = md5($_SERVER["HTTP_USER_AGENT"]);
			session_write_close();

			//Track Details
			@$browser  = Detect::browser();
			@$ip 	  = Detect::ip();
			@$city = file_get_contents('http://ipinfo.io/'.$ip.'/city');
			if(strlen($city) < 2)$city = "Unknown";
			@$location =	$city.", ".Detect::ipCountry();
			@$device	  = Detect::brand();
			@$os		  = Detect::os();
			@$created_at	= time();
			@$user_id = $_SESSION['T3_SESSION_ID'];
			$insert = "INSERT into sessions(user_id,browser,os,ip,device,location,created_at)VALUES('$user_id', '$browser', '$os', '$ip', '$device', '$location', '$created_at')";
			if(mysqli_query($connection, $insert))echo true;
			else echo false;
		}	
		else if($user['confirm'] == '0'){ 
			echo "not comfirmed";
		}
	}
	else{
		echo false;
	}
}

//t3nsor Login Script v1.0
//Omkar Prabhu
?>