<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/session_mod.php';
$title = "Trash";
$sel = '5'
?>

<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_header.php'; ?>

        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-header.php'; ?>

        <div id="outer-frame"> 
            
            <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-sidebar.php'; ?>

            <div id="page-content">
                
                <div id="component415" class="">
                    <div id="browse-box" class="browse-box list_view file-browse">

                        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/browse-header.php'; ?>
                        
                    </div>
                </div>

                
                <div id="sf-view" class="empty-list" style="display: block;margin-top:114px;">
                    <div id="sf-current" class="sf-list-container">
                        <div class="sf-sort">
                            <a href="#" class="name-sorter sort-option bolded">
                                <span>Items from your t3nsor</span>
                            </a>
                            <a href="#" class="modified-sorter sort-option">
                                <span>Modified</span>
                            </a>
                        </div>
                        <br>
                        <ol class="sf-list">
                            <li class="sf-folder" title="Music">     
                                <div class="filename-col">              
                                    <a href="/home/Music">
                                        <img alt="" src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_folder_deleted_32"></a>       
                                        <a class="filename" href="/home/Music">Music</a>              
                                        <br>       
                                        <span class="members">                      Akshay                         </span>
                                </div>      
                                <div class="modified-col">       3/12/2015 8:58 AM     </div>      
                                <div class="options-col">              
                                    <a href="#" class="options-link" onclick="show_d_m()" >
                                        <button class="sprite-button">
                                            <img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_x">
                                        </button>
                                    </a>            
                                </div>
                                <br class="clear">   
                            </li>
                            <li class="sf-folder" title="Music">     
                                <div class="filename-col">              
                                    <a href="/home/Music">
                                        <img alt="" src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_page_white_picture_deleted_32"></a>       
                                        <a class="filename" href="/home/Music">Music</a>              
                                        <br>       
                                        <span class="members">                      Akshay                         </span>
                                </div>      
                                <div class="modified-col">       3/12/2015 8:58 AM     </div>      
                                <div class="options-col">              
                                    <a href="#" class="options-link"  onclick="show_d_m()">
                                        <button class="sprite-button">
                                            <img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_x">
                                        </button>
                                    </a>            
                                </div>
                                <br class="clear">   
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>