<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/session_mod.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';
@$k = mysqli_real_escape_string($connection,$_GET["k"]);
$check_folder = mysqli_query($connection,"SELECT * from folders WHERE folder_key='$k'");
if(mysqli_num_rows($check_folder) > 0){
    $row = mysqli_fetch_assoc($check_folder);
    $title = $row["name"];
    $folder_key = $row["folder_key"];
}
else header("location: /home");
$sel = 'f';
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/t3nsor_upload_file.php';
?>

<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_header.php'; ?>

        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-header.php'; ?>

        <div id="outer-frame"> 
            
            <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-sidebar.php'; ?>

            <div id="page-content">
                
                <div id="component415" class="">
                    <div id="browse-box" class="browse-box list_view file-browse">

                        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/browse-header.php'; ?>

                        <div class="c-column-header browse-menu browse-file-list-header" id="sub-menu" style="display:none;">
                            <span class="browse-menu__description" id="select-name">Music</span>
                            <ul class="browse-menu__actions">
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_download browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Download</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action" onclick="show_d_m()">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_file_delete browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Delete</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action" onclick="show_r_m()">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_rename browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Rename</span>
                                    </button>
                                </li>
                                <span id="more_option" style="display:none;">
                                <li class="browse-menu__action" onclick="show_m_m()">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_move browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Move</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action" onclick="show_c_m()">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_copy browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Copy</span>
                                    </button>
                                </li>
                                </span>
                                <li class="browse-menu__action" onclick="show_s_m()">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_share browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Share</span>
                                    </button>
                                </li>
                            </ul>
                            <span class="browse-menu__filesize-label" id="closeopt" onclick="closeopt()">
                                <img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_disable">
                            </span>
                        </div>


                        <div aria-readonly="true">

                            <ul class="c-column-header browse-file-list-header o-grid o-grid--no-gutter" id="sub-sort" style="display:inherit;">
                                <li aria-sort="ascending" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--6-of-12">
                                    <button class="c-column-header__button u-trim-margin u-trim-padding u-font-strong" title="Sort in descending order" tabindex="0">
                                        <span>Name</span>
                                        <img class="sprite sprite_web s_web_arrow-up-gray c-column-header__sort-icon u-mar-left-xxs u-l-ib--m" src="/static/images/views/icon_spacer.gif" alt="">
                                    </button>
                                </li><li aria-sort="" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--3-of-12" >
                                    <button class="c-column-header__button u-trim-margin u-trim-padding" title="Sort in ascending order" tabindex="0">
                                        <span>Modified</span>
                                    </button>
                                </li><li aria-sort="" class="c-column-header__header u-pad-vertical-xs o-grid__col o-grid__col--3-of-12">
                                    <button class="c-column-header__button u-trim-margin u-trim-padding" title="Swap column to Kind" tabindex="0">
                                        <span>Size - Extension</span>
                                    </button>
                                </li>
                            </ul>

                            <div class="files-list">
                                <ul class="is-sharedwith-column-visible browse-files o-list-ui">

                                    <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/content/files_folders.php'; ?>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="inline-upload-status-container">
                    <div id="inline-upload-status" class="upload-file success">
                        <div class="inline-upload-info">
                            <div class="icon" data-reactid=".4.0.0">
                                <img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_check">
                            </div>
                            <div class="files-info">
                                <span class="file-desc">
                                    <span>Uploaded 0 of 20 files</span>
                                </span>
                            </div>
                            <div class="status">
                                <button class="button-as-link">
                                    <img class="sprite sprite_web s_web_x" src="/static/images/views/icon_spacer.gif" >
                                </button>
                            </div>
                        </div>
                        <div class="inline-upload-bar" >
                            <div class="inline-upload-progress" style="width: 15%;"></div>
                        </div>
                    </div>
                </div> -->

                <!-- <div style="display: none;" id="sharing-growth-experiments-dropdown-menu" class="sharing-menu sub-nav chat-bubble">
                    <ul class="o-list-ui">
                        <li class="option-to-share-folder u-pad-vertical-s u-pad-horizontal-xs"><div class="sprite-div"><div class="sprite-frame small icon-left"><img src="/static/images/views/icon_spacer.gif" alt="" class=" sprite sprite_web s_web_user_add" />
                        </div><div class="sprite-text"><div class="sprite-text-inner">Invite people to collaborate<br /><span class="subtext u-font-meta">People can sync and edit
                        </span>
                        </div>
                        </div>
                        </div>
                        </li>
                        <li class="option-to-share-link u-pad-vertical-s u-pad-horizontal-xs"><div class="sprite-div"><div class="sprite-frame small icon-left"><img src="/static/images/views/icon_spacer.gif" alt="" class=" sprite sprite_web s_web_s_link" />
                        </div><div class="sprite-text"><div class="sprite-text-inner">Send link<br /><span class="subtext u-font-meta">People can view
                        </span>
                        </div>
                        </div>
                        </div>
                        </li>
                    </ul>
                    <div class="chat-bubble-arrow-border"></div>
                    <div class="chat-bubble-arrow"></div>
                </div> -->
            </div>
        </div>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>