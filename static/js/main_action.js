/* SUBOPTIONS ON CLICK */

function showopt(type,name,folder_key,file_key){
    document.getElementById('sub-menu').style.display = "";
    document.getElementById('sub-sort').style.display = "none";
    //Shorten the long name to view 
    var select_name = name;
    var len = select_name.length;
    if(len > 30){
        var new_name = select_name.substr(0,10) + '...' + select_name.substr(len-15, len);
    }
    else new_name = select_name;
    document.getElementById('select-name').innerHTML = new_name;
    t3_rename.apply(this, arguments);
    t3_delete.apply(this, arguments);
    t3_share.apply(this, arguments);
    if(type == "files"){
        document.getElementById('more_option').style.display = "";
        t3_move.apply(this, arguments);
        t3_copy.apply(this, arguments);
    }
    else{
        document.getElementById('more_option').style.display = "none";
    }
}


function t3_rename(type, name, folder_key, file_key){
    document.getElementById('rename_type').value = type
    document.getElementById('rename_name').value = name;
    document.getElementById('rename_name_title').innerHTML = name;
    document.getElementById('rename_folder_key').value = folder_key;
    document.getElementById('rename_file_key').value = file_key;
        
}
function t3_delete(type, name, folder_key, file_key){
    document.getElementById('delete_type').value = type
    document.getElementById('delete_name').value = name;
    document.getElementById('delete_name_show').innerHTML = name;
    document.getElementById('delete_name_title').innerHTML = name;
    document.getElementById('delete_folder_key').value = folder_key;
    document.getElementById('delete_file_key').value = file_key;
        
}
function t3_move(type, name, folder_key, file_key){
    document.getElementById('move_type').value = type
    document.getElementById('move_name').value = name;
    document.getElementById('move_name_show').innerHTML = name;
    document.getElementById('move_name_title').innerHTML = name;
    document.getElementById('move_folder_key').value = folder_key;
    document.getElementById('move_file_key').value = file_key;
        
}
function t3_copy(type, name, folder_key, file_key){
    document.getElementById('copy_type').value = type
    document.getElementById('copy_name').value = name;
    document.getElementById('copy_name_show').innerHTML = name;
    document.getElementById('copy_name_title').innerHTML = name;
    document.getElementById('copy_folder_key').value = folder_key;
    document.getElementById('copy_file_key').value = file_key;
        
}
function t3_share(type, name, folder_key, file_key){
    document.getElementById('share_type').value = type
    document.getElementById('share_name').value = name;
    document.getElementById('share_name_show').innerHTML = name;
    document.getElementById('share_name_title').innerHTML = name;
    document.getElementById('share_folder_key').value = folder_key;
    document.getElementById('share_file_key').value = file_key;
        
}



function select_m(folder_key){
    document.getElementById('move_new_folder_key').value = folder_key;
}
function select_c(folder_key){
    document.getElementById('copy_new_folder_key').value = folder_key;
}

/* TOP ACCOUNT HEADER */
function account_dropdown() {
    document.getElementById("account-dropdown").style.display = "inherit";
    var color = '#' + Math.floor(Math.random() * 16777215).toString(16);
    document.getElementById('c-t3').style.backgroundColor = color;
}


/* T3NSOR CHANGE PASSWORD */
function showpass(){
    document.getElementById('change_pass').style.display = "";
}
function closepass(){
    document.getElementById('change_pass').style.display = "none";
}



window.onclick = function(event) {	
	if (!event.target.matches('.drp-name') && !event.target.matches('.dropdown-content') ){
    	document.getElementById("account-dropdown").style.display = "none";
    }
}

function mod_file_size(bytes, si) {
    var thresh = si ? 1000 : 1024;
    if(Math.abs(bytes) < thresh) {
        return bytes + ' B';
    }
    var units = si
        ? ['kB','MB','GB','TB','PB','EB','ZB','YB']
        : ['KB','MB','GB','TB','PB','EB','ZB','YB'];
    var u = -1;
    do {
        bytes /= thresh;
        ++u;
    } while(Math.abs(bytes) >= thresh && u < units.length - 1);
    return bytes.toFixed(1)+' '+units[u];
}

/* SHOW UPLOAD FILES LIST */
var files_list = '';
    
document.addEventListener("DOMContentLoaded", init_files, false);

function init_files() {
    document.querySelector('#files').addEventListener('change', handleFileSelect, false);
    files_list = document.querySelector("#upload-files-list");
}
    
function handleFileSelect(e) {

    document.getElementById('upload-files-list').style.display = "";
    document.getElementById('show_up_f_img').style.display = "none";

	if(!e.target.files) return;

	files_list.innerHTML = '';

	var files = e.target.files;
	for(var i=0; i<files.length; i++) {
	    var f = files[i];
	    
	    files_list.innerHTML += '<li class="upload-file success" ><div class="upload-progress-bar" style="width: 100%;"></div><div class="upload-file-info" style="overflow:hidden;"><div class="filename-col"><img class="sprite sprite_web s_web_page_white" src="/static/images/views/icon_spacer.gif" alt=""><span class="filename">' + f.name + '</span><span class="size"><span> - </span><span>' + mod_file_size(f.size) + '</span></span></div><div class="status-col"><img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_check"></div></div></li>'; 

	}

}

/* SHOW UPLOAD PHOTOS LIST */
var photos_list = '';
    
document.addEventListener("DOMContentLoaded", init_photos, false);

function init_photos() {
    document.querySelector('#photos').addEventListener('change', handlePhotoSelect, false);
    photos_list = document.querySelector("#upload-photos-list");
}
    
function handlePhotoSelect(e) {

    document.getElementById('upload-photos-list').style.display = "";
    document.getElementById('show_up_p_img').style.display = "none";

	if(!e.target.files) return;

	photos_list.innerHTML = '';

	var files = e.target.files;
	for(var i=0; i<files.length; i++) {
	    var f = files[i];
	    if(!f.type.match("image.*"))return;
	    photos_list.innerHTML += '<li class="upload-file success" ><div class="upload-progress-bar" style="width: 100%;"></div><div class="upload-file-info" style="overflow:hidden;"><div class="filename-col"><img class="sprite sprite_web s_web_page_white_picture" src="/static/images/views/icon_spacer.gif" alt=""><span class="filename">' + f.name + '</span><span class="size"><span> - </span><span>' + mod_file_size(f.size) + '</span></span></div><div class="status-col"><img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_check"></div></div></li>'; 

	}

}
