<!--Copy!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_c_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_copy global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Copy '<span id="copy_name_title"></span>'
                            </h3> 
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <div class="unified-share-modal__main unified-share-modal__section">
                        <p align="center" style="color:gray;padding:20px;">
                            Choose a location for copying the <b style="color:black"><span id="copy_name_show"></span></b>
                            <br>
                            <div role="tree" style="width:80%;margin:0px auto;" class="tree-view ax-focusable">
                                <ul class="tree-view__group" role="group"">
                                    <li id="tree-view-ab45d5/" class="tree-view__item" role="treeitem" onclick="select_c('106a6c24')">
                                        <span class="tree-view__item-row" style="padding-left:0;">
                                            <div class="tree-view__icon-wrapper">
                                                <img class="sprite sprite_web s_web_dropbox tree-view__item-icon" src="/static/images/assets/logo.png" alt="">
                                            </div>
                                            <span class="tree-view__item-label">t3nsor</span>
                                        </span>
                                    </li>
                                    <ul class="tree-view__group" role="group">
                                         <?php
                                        $user_id = $_SESSION['T3_SESSION_ID'];
                                        $show_folders = mysqli_query($connection, "SELECT * from folders WHERE user_id='$user_id' ORDER by name ASC");
                                        while($row = mysqli_fetch_assoc($show_folders)){
                                            echo'<li id="de" class="tree-view__item tree-view__item--leaf" role="treeitem" aria-selected="false" 
                                                onclick="select_c(&#39;'.$row['folder_key'].'&#39;)">
                                                    <span class="tree-view__item-row" style="padding-left:0;">
                                                        <div class="tree-view__icon-wrapper">
                                                            <img class="sprite sprite_web s_web_folder_small tree-view__item-icon" src="/static/images/views/icon_spacer.gif" alt="">
                                                        </div>
                                                        <span class="tree-view__item-label">'.$row['name'].'</span>
                                                    </span>
                                                </li>';
                                        }
                                        ?>
                                    </ul>
                                </ul>    
                            </div>
                        </p>
                    </div>
                    <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                        <form id="copy_modal_form">
                            <div class="u-l-fr op-btn">
                                <input type="hidden" id="copy_new_folder_key">
                                <input type="hidden" id="copy_type">
                                <input type="hidden" id="copy_name">
                                <input type="hidden" id="copy_folder_key">
                                <input type="hidden" id="copy_file_key">
                                <button type="submit" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span><img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Copy</span>
                                </button>
                                &nbsp;
                                <button type="button" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button" onclick="close_m()">
                                    <span><img class="sprite sprite_web s_web_disable" src="/static/images/views/icon_spacer.gif" align="center"> Cancel</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Copy!-->