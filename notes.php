<?php
$title = "Notes";
$sel = '3'
?>
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_header.php'; ?>

        <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-header.php'; ?>

        <div id="outer-frame"> 
            
            <?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/page-sidebar.php'; ?>

            <div id="page-content">
                
                <div id="component415" class="">
                    <div id="browse-box" class="browse-box list_view file-browse">

                        <div id="browse-header" class="browse-header" >

                            <div id="browse-global-actions-bar" class="browse__global-actions clearfix u-mar-bottom-m">
                                <h1 class="page-header-text u-l-fl" >t3nsor</h1>
                                <div class="search-bar--container u-l-fr">
                                    <div class="search-bar">
                                        <form class="search-bar__input">
                                            <input class="search-bar__text-input" placeholder="Search" value="">
                                            <input aria-label="Search" class="search-bar__button" type="submit" value="">
                                        </form>
                                    </div>
                                </div>
                                <div id="browse-rightmenu" class="u-l-fr">
                                    <div class="global-actions u-mar-top-xs">
                                        <ul class="horizontal">
                                            <li class="global-actions__action">
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_upload global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_folder_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_album_delete global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_rainbow global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_album global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_trash-can global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action">
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_delete global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_resolve global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_disable global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_check global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="global-actions__action"  >
                                                <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload">
                                                    <button class="global-actions__button sprite-button">
                                                    <img class="sprite sprite_web s_web_contact_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="c-column-header browse-menu browse-file-list-header" id="sub-menu" style="display:none;">
                            <span class="browse-menu__description" >Music</span>
                            <ul class="browse-menu__actions">
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_download browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Download</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_file_delete browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Delete</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_rename browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Rename</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_move browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Move</span>
                                    </button>
                                </li>
                                <li class="browse-menu__action">
                                    <button class="button-as-link browse-menu__action-button">
                                        <img class="sprite sprite_web s_web_copy browse-menu__action-button-sprite" src="/static/images/views/icon_spacer.gif" alt="">
                                        <span class="browse-menu__action-button-label">Copy</span>
                                    </button>
                                </li>
                            </ul>
                            <span class="browse-menu__filesize-label"></span>
                        </div>

                    </div>
                </div>

                <div id="component22532" class="" style="margin-top:114px;">
                    <div class="recents-view">
                        <ul class="recents-view__sections">
                            <li class="recents-section">
                                <h1 class="recents-section__title">Yesterday</h1>
                                <ul class="recents-list">
                                    <li class="recents-item recents-item--loaded" onclick="t3nsor_select()">
                                        <div class="recents-item__wrapper">
                                            <div class="recents-item__icon">
                                                <span class="recents-item__img file-icon file-icon--sprite">
                                                    <img class="sprite sprite_web s_web_page_white_note_32 file-icon__img" src="/static/images/views/icon_spacer.gif" alt="">
                                                </span>
                                            </div>
                                            <div class="recents-item__details">
                                                <div class="recents-item__heading">Note Name</div>
                                                <div class="recents-item__subheading">
                                                    <span>
                                                        <a href="https://www.dropbox.com/home/photos" class="recents-item__subheading-path">28 Jan 2016, 11:30 PM</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>