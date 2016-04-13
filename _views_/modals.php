<!--Upload Files!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_f_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_upload global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Upload Files
                            </h3>
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <div class="unified-share-modal__main unified-share-modal__section">
                        <p align="center"><br>Choose files to upload into your t3nsor account!</p>
                        <ol id="upload-files-list" style="display:none;margin:2% 2%;padding:0;max-height:228px;overflow-y:auto;position:relative;">
                        </ol>
                        <p align="center" id="show_up_f_img"><img src="/static/images/views/upload_file.png" width="35%" align="center"></p>
                    </div>
                    <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="u-l-fl op-btn" >
                                <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span>
                                        <input type="file" name="files[]" id="files" required="" style="opacity:0;padding-top:10px;width:120px;position:fixed;" multiple="true">
                                        <img class="sprite sprite_web s_web_add" src="/static/images/views/icon_spacer.gif" align="center"> 
                                        Choose Files
                                    </span>
                                </button>
                            </div>
                            <div class="u-l-fr op-btn">
                                <input type="hidden" name="folder_key" value="<?php echo $folder_key; ?>" readonly>
                                <button type="submit" name="submit_files" value="UPLOAD_FILES" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span><img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Upload</span>
                                </button>
                                &nbsp;
                                <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button" onclick="close_m()">
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
<!--Upload Files!-->

<!--Upload Photos!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_p_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_album global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Upload Photos
                            </h3>
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <div class="unified-share-modal__main unified-share-modal__section">
                        <p align="center"><br>Choose photos to upload into your t3nsor account!</p>
                        <ol id="upload-photos-list" style="display:none;margin:2% 2%;padding:0;max-height:228px;overflow-y:auto;position:relative;">
                        </ol>
                        <p align="center" id="show_up_p_img"><img src="/static/images/views/upload_photo.png" width="35%" align="center"></p>
                    </div>
                    <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="u-l-fl op-btn" >
                                <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span>
                                        <input type="file" name="photos[]" id="photos" required="" style="opacity:0;padding-top:10px;width:120px;position:fixed;" multiple="true" accept="image/*" >
                                        <img class="sprite sprite_web s_web_add" src="/static/images/views/icon_spacer.gif" align="center"> 
                                        Choose Photos
                                    </span>
                                </button>
                            </div>
                            <div class="u-l-fr op-btn">
                                <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span><img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Upload</span>
                                </button>
                                &nbsp;
                                <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button" onclick="close_m()">
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
<!--Upload Photos!-->

<!--Create Folder!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_cf_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_folder_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Create a new folder
                            </h3>
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <form id="create_folder_form">
                        <div class="unified-share-modal__section u-pad-horizontal-s u-pad-vertical-xs">
                            <div class="o-flag">
                                <label class="o-flag__fix u-font-strong" for="unified-share-modal-contacts-tokenizer">Name:</label>
                                <div class="unified-share-modal__to-input-box o-flag__flex">
                                    <div class="react-tokenizer".>
                                        <div class="tokenizer-input" style="padding:4px;padding-right:0;max-height:119px;">
                                            <div class="token-container" style="margin-left:-4px;margin-bottom:-4px;">
                                                <input style="width: 479px; margin-left: 4px;" name="folder_name" id="folder_name" placeholder="Name of new Folder" class="contacts-tokenizer-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="unified-share-modal__main unified-share-modal__section">
                            <p align="center" style="color:gray;padding:20px;">
                                Create a new folder! and add some of your stuff!
                                <br>
                                <img src="/static/images/views/new_folder.png" width="80%">
                            </p>
                        </div>
                        <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                            <div class="u-l-fr op-btn">
                                <button type="submit" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span>
                                        <img src="/static/images/views/loading.gif" width="20" id="loading_img" align="center" style="display:none;">
                                        <img class="sprite sprite_web s_web_add" src="/static/images/views/icon_spacer.gif" align="center"> Create
                                    </span>
                                </button>
                                &nbsp;
                                <button type="button" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button" onclick="close_m()">
                                    <span><img class="sprite sprite_web s_web_disable" src="/static/images/views/icon_spacer.gif" align="center"> Cancel</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Create Folder!-->




