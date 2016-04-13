<!--Delete!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_d_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_trash-can global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                               Delete '<span id="delete_name_title"></span>'
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
                            Are you sure you want to delete <b style="color:black"><span id="delete_name_show"></span></b>?
                            <br>
                            <br>
                            <img src="/static/images/views/empty_states/trash.png" width="35%">
                        </p>
                    </div>
                    <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                        <form id="delete_modal_form">
                            <div class="u-l-fr op-btn">
                                <input type="hidden" id="delete_type">
                                <input type="hidden" id="delete_name">
                                <input type="hidden" id="delete_folder_key">
                                <input type="hidden" id="delete_file_key">
                                <button type="submit" class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                    <span><img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Delete</span>
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
<!--Delete!-->