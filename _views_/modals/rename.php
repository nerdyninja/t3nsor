<div class="db-modal-wrapper db-modal--bare-style" id="t3_r_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_rename global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Rename '<span id="rename_name_title"></span>'
                            </h3>
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <form id="rename_modal_form">
                        <div class="unified-share-modal__section u-pad-horizontal-s u-pad-vertical-xs">
                            <div class="o-flag">
                                <label class="o-flag__fix u-font-strong" for="unified-share-modal-contacts-tokenizer">Name:</label>
                                <div class="unified-share-modal__to-input-box o-flag__flex">
                                    <div class="react-tokenizer".>
                                        <div class="tokenizer-input" style="padding:4px;padding-right:0;max-height:119px;">
                                            <div class="token-container" style="margin-left:-4px;margin-bottom:-4px;">
                                                <input style="width: 479px; margin-left: 4px;" name="rename_new_name" id="rename_new_name" placeholder="New name" class="contacts-tokenizer-input">
                                                <input type="hidden" name="rename_name" id="rename_name">
                                                <input type="hidden" name="rename_type" id="rename_type">
                                                <input type="hidden" name="rename_folder_key" id="rename_folder_key">
                                                <input type="hidden" name="rename_file_key" id="rename_file_key">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="unified-share-modal__main unified-share-modal__section">
                            <p align="center" style="color:gray;padding:20px;">
                                <img src="/static/images/views/new_rename.png" width="75%">
                            </p>
                        </div>
                        <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                            <div class="u-l-fr op-btn">
                                <button type="submit" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span>
                                        <img src="/static/images/views/loading.gif" width="20" id="loading_img" align="center" style="display:none;">
                                        <img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Rename
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