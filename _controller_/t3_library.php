<?php
function get_file_icon ($extension) {
	$image 			= array("bmp", "cr2", "gif", "ico", "ithmb", "jpeg", "jpg", "nef", "png", "raw", "svg", "tif", "tiff", "wbmp", "webp");
	$video 			= array(".3g2", "3gp", "3gpp", "3gpp2", "asf", "avi", "dv", "dvi", "flv", "m2t", "m4v", "mkv", "mov", "mp4", "mpeg", "mpg", "mts", "ogv", "				ogx", "rm", "rmvb", "ts", "vob", "webm", "wmv");
	$audio 			= array(".aac", "aif", "aifc", "aiff", "au", "flac", "m4a", "m4b", "m4p", "m4r", "mid", "mp3", "oga", "ogg", "opus", "ra", "ram", "spx", "				wav", "wma");
	$pdf  			= array("acsm", "aeh", "azw", "cb7", "cba", "cbr", "cbt", "cbz", "ceb", "chm", "epub", "fb2", "ibooks", "kf8", "lit", "lrf", "lrx", "mobi", "opf", "oxps", "pdf", "pdg", "prc", "tebr", "tr2", "tr3", "xeb", "xps");
	$doc			= array("csv", "doc", "dochtml", "docm", "docx", "docxml", "dot", "dothtml", "dotm", "dotx");
	$excel			= array("xdf", "xdp", "xlam", "xll", "xlr", "xls", "xlsb", "xlsm", "xlsx", "xltm", "xltx", "xps");
	$ppt 			= array(".pot", "pothtml", "potm", "potx", "ppa", "ppam", "pps", "ppsm", "ppsx", "ppt", "ppthtml", "pptm", "pptx", "pptxml", "prn", "ps", "pwz", "rtf", "tab", "template");
	$code_web_two 	= array( "php", "asp", "jsp", "sql", "net", "aspx");
 	$code_os_one  	= array("applescript", "as", "as3", "c", "cc", "clisp", "coffee", "cpp", "erl", "fountain", "ft", "h", "hpp", "inc", "ini", "java", "js", "json", "less", "pl", "plist", "properties", "py", "rb", "tmpl", "tsv", "vb", "xml", "yaml", "yml"); 
	$pure_web 		= array("web", "url", "html", "shtml", "xhtml", "htm");
	$gear 			= array("exe", "jnlp", "msi", "dll", "bak", "torrent");
	$package 		= array("dmg", "pkg", "dwg");
	$compressed 	= array("zip", "7z", "zipx", "tar", "bz2", "rar", "rz", "tar.gz", "tgz");
	$text           = array("text", "txt", "note");
	if (in_array(@$extension, @$image))$image_ext 				= "s_web_page_white_picture_32";
	else if (in_array(@$extension, @$audio))$image_ext 			= "s_web_page_white_playlist_32";
	else if (in_array(@$extension, @$video))$image_ext 			= "s_web_page_white_film_32";
	else if (in_array(@$extension, @$pdf))$image_ext 	 		= "s_web_page_white_acrobat_32";
	else if (in_array(@$extension, @$doc))$image_ext 	 		= "s_web_page_white_word_32";
	else if (in_array(@$extension, @$ppt))$image_ext   			= "s_web_page_white_powerpoint_32";
	else if (in_array(@$extension, @$excel))$image_ext 			= "s_web_page_white_excel_32";
	else if (in_array(@$extension, @$code_os_one))$image_ext 	= "s_web_page_white_code_32";
	else if (in_array(@$extension, @$code_web_two))$image_ext 	= "s_web_page_white_webcode_32";
	else if (in_array(@$extension, @$compressed))$image_ext 	= "s_web_page_white_compressed_32";
	else if (in_array(@$extension, @$text))$image_ext 			= "s_web_page_white_text_32";
	else if (in_array(@$extension, @$pure_web))$image_ext 		= "s_web_page_white_linkfile_32";
	else if (in_array(@$extension, @$gear))$image_ext 			= "s_web_page_white_gear_32";
	else if (in_array(@$extension, @$package))$image_ext 		= "s_web_package_32";
	else if ($extension == "folder")$image_ext					= "folder.png";
	else $image_ext = "s_web_page_white_32";
	
	return $image_ext;
}
?>