<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/t3_library.php';

function convert_file_size($size, $precision = 1) {
	if($size == 0)return "0 B";
	else{ 
	    $base = log($size, 1024);
	    $size_suffix = array('', 'KB', 'MB', 'GB', 'TB');   
	    return round(pow(1024, $base - floor($base)), $precision) .' '. $size_suffix[floor($base)];
	}
}

$user_id = $_SESSION['T3_SESSION_ID'];
$get_photos = mysqli_query($connection,"SELECT * from photos WHERE user_id='$user_id' ORDER by created_at DESC");

	if(mysqli_num_rows($get_photos) > 0){	
		while($row = mysqli_fetch_assoc($get_photos)){
			echo'<li class="browse-file-row o-grid o-grid--no-gutter" onclick="showopt(&#39;photos&#39;, &#39;'.$row['name'].'&#39;, &#39;&#39;, &#39;'.$row['file_key'].'&#39;)">
	                <div class="browse-file-row__column o-grid__col o-grid__col--am column--filename u-ellip o-grid__col--6-of-12">
	                    <div class="o-flag o-flag--middle">
	                        <div class="o-flag__fix">
	                        	<img src="'.$row['location'].'" class="browse-file-row__accessory u-pad-right-xs">
	                        </div>
	                        <div class="o-flag__flex">
	                            <div class="browse-file-row__name-location">
	                                <a class="filename-link u-ellip browse-file-row__name" href="'.$row['location'].'">
	                                    <span>'.$row['name'].'</span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="browse-file-row__column o-grid__col o-grid__col--am u-ellip o-grid__col--3-of-12">
	                    <span>'.date('j M Y, g:i A', $row['created_at']).'</span>
	                </div>
	                <div class="browse-file-row__column o-grid__col o-grid__col--am column--kind o-grid__col--3-of-12">
	                    <span>'.convert_file_size($row['size']).'</span>
	                </div>
	            </li>';		
		}
	}else{
		echo '<h2 align="center" style="margin-top:10%"><img src="/static/images/views/empty_states/photos.png" align="center" width="45%"><br><br> There are no photos here</h2>
		<p align="center">Upload some photos from top menus</p>';
	}
 

//t3nsor Create Folder Script v1.0
//Omkar Prabhu
?>