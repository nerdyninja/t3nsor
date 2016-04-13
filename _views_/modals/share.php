<!--Share!-->
<div class="db-modal-wrapper db-modal--bare-style" id="t3_s_modal" style="display:none;">
    <div class="db-modal-overlay"></div>
    <div class="db-modal" tabindex="0" role="dialog" ">
        <div class="db-modal-box">
            <div class="db-modal-bare">
                <div class="unified-share-modal unified-share-modal--membership">
                    <div class="unified-share-modal__section u-pad-s o-flag">
                        <div class="unified-share-modal__title u-pad-left-xs unified-share-modal__title--member-count o-flag__flex">
                            <h3 class="u-font-strong" id="unified-share-modal-title">
                                <img class="sprite sprite_web s_web_s_share global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" align="center">
                                Share '<span id="share_name_title"></span>'
                            </h3>
                        </div>
                        <div class="unified-share-modal__close o-flag__fix" onclick="close_m()">
                            <button class="c-borderless-button u-mar-left-s">
                                <img class="sprite sprite_web s_web_xclose_light_gray" src="/static/images/views/icon_spacer.gif" alt="Close Modal">
                            </button>
                        </div>
                    </div>
                    <div class="unified-share-modal__section u-pad-horizontal-s u-pad-vertical-xs">
                        <div class="o-flag">
                            <label class="o-flag__fix u-font-strong" for="unified-share-modal-contacts-tokenizer">To:</label>
                            <div class="unified-share-modal__to-input-box o-flag__flex">
                                <div class="react-tokenizer".>
                                    <div class="tokenizer-input" style="padding:4px;padding-right:0;max-height:119px;">
                                        <div class="token-container" style="margin-left:-4px;margin-bottom:-4px;">
                                            <input style="width: 479px; margin-left: 4px;" placeholder="Email of the recipient" class="contacts-tokenizer-input" id="unified-share-modal-contacts-tokenizer" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unified-share-modal__main unified-share-modal__section">
                        <p align="center" style="color:gray;padding:20px;">
                            Share your file <b style="color:black"><span id="share_name_show"></span></b> with anyone you want!
                            <br>
                            <img src="/static/images/views/new_share.png" width="50%" style="margin-top:25px;">
                        </p>
                    </div>
                    <div class="unified-share-modal__section clearfix u-pad-horizontal-s u-pad-vertical-xs">
                        <div class="u-l-fr op-btn">
                            <input type="hidden" id="share_type">
                            <input type="hidden" id="share_name">
                            <input type="hidden" id="share_folder_key">
                            <input type="hidden" id="share_file_key">
                            <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button">
                                <span><img class="sprite sprite_web s_web_check" src="/static/images/views/icon_spacer.gif" align="center"> Share</span>
                            </button>
                            &nbsp;
                            <button class="unified-share-modal__folder-settings u-font-strong u-font-meta c-borderless-button" onclick="close_m()">
                                <span><img class="sprite sprite_web s_web_disable" src="/static/images/views/icon_spacer.gif" align="center"> Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Share!-->