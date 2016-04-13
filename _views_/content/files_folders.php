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
if($sel!='f'){
	$get_folders = mysqli_query($connection,"SELECT * from folders WHERE user_id='$user_id' ORDER by created_at DESC");

	if(mysqli_num_rows($get_folders) > 0){
		while($row = mysqli_fetch_assoc($get_folders)){
			echo'<li class="browse-file-row o-grid o-grid--no-gutter" onclick="showopt(&#39;folders&#39;, &#39;'.$row['name'].'&#39;, &#39;'.$row['folder_key'].'&#39;, &#39;&#39;)">
	                <div class="browse-file-row__column o-grid__col o-grid__col--am column--filename u-ellip o-grid__col--6-of-12">
	                    <div class="o-flag o-flag--middle">
	                        <div class="o-flag__fix">
	                            <img class="sprite sprite_web s_web_folder_32 browse-file-row__accessory u-pad-right-xs" src="/static/images/views/icon_spacer.gif" alt="">
	                        </div>
	                        <div class="o-flag__flex">
	                            <div class="browse-file-row__name-location">
	                                <a class="filename-link u-ellip browse-file-row__name" href="f?k='.$row['folder_key'].'">
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
	                    <span>&nbsp;---&nbsp;</span>
	                </div>
	            </li>';		
		}
	}else{
		@$flag = '1';
	}
}

$get_files = mysqli_query($connection,"SELECT * from files WHERE user_id='$user_id' AND folder_key='$folder_key' ORDER by created_at DESC");

	if(mysqli_num_rows($get_files) > 0){
		while($row = mysqli_fetch_assoc($get_files)){
			echo'<li class="browse-file-row o-grid o-grid--no-gutter" onclick="showopt(&#39;files&#39;, &#39;'.$row['name'].'&#39;, &#39;'.$row['folder_key'].'&#39;, &#39;'.$row['file_key'].'&#39;)">
	                <div class="browse-file-row__column o-grid__col o-grid__col--am column--filename u-ellip o-grid__col--6-of-12">
	                    <div class="o-flag o-flag--middle">
	                        <div class="o-flag__fix">
	                            <img class="sprite sprite_web '.get_file_icon($row['extension']).' browse-file-row__accessory u-pad-right-xs" src="/static/images/views/icon_spacer.gif" alt="">
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
		if($folder_key!=""){
			echo '<h2 align="center" style="margin-top:5%;"><img src="/static/images/views/empty_states/files.png" align="center" width="50%"><br> There are no files here</h2>
			<p align="center">Upload some files from top menus</p>';
		}
		else if(@$flag == '1'){
			echo '<h2 align="center" style="margin-top:5%;"><img src="/static/images/views/empty_states/files.png" align="center" width="50%"><br> There are no files here</h2>
			<p align="center">Upload some files from top menus</p>';
		}
	}
 

//t3nsor Create Folder Script v1.0
//Omkar Prabhu
?>