<div id="browse-header" class="browse-header" >
    <div id="browse-global-actions-bar" class="browse__global-actions clearfix u-mar-bottom-m">
        <h1 class="page-header-text u-l-fl" >t3nsor</h1>
        <div class="search-bar--container u-l-fr">
            <div class="search-bar">
                <form class="search-bar__input" method="GET" action="search">
                    <input class="search-bar__text-input" name="q" placeholder="Search">
                    <input aria-label="Search" class="search-bar__button" type="submit" value="">
                </form>
            </div>
        </div>
        <div id="browse-rightmenu" class="u-l-fr">
            <div class="global-actions u-mar-top-xs">
                <ul class="horizontal">
                    <?php 
                    if($sel== '1' || $sel== '2' || $sel=='f')
                        echo'
                    <li class="global-actions__action" onclick="show_f_m()">
                        <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload Files">
                            <button class="global-actions__button sprite-button">
                            <img class="sprite sprite_web s_web_upload global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                            </button>
                        </div>
                    </li>';
                    if($sel == '1' || $sel == '2')
                        echo'
                    <li class="global-actions__action" onclick="show_p_m()">
                        <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Upload Photos">
                            <button class="global-actions__button sprite-button">
                            <img class="sprite sprite_web s_web_photo_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                            </button>
                        </div>
                    </li>
                    <li class="global-actions__action" onclick="show_cf_m()">
                        <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Create Folder">
                            <button class="global-actions__button sprite-button">
                            <img class="sprite sprite_web s_web_folder_add global-actions__button-sprite" src="/static/images/views/icon_spacer.gif" alt="Upload">
                            </button>
                        </div>
                    </li>';
                    if($sel == 's')echo '<li class="global-actions__action">
                        <div class="c-title-bubble c-title-bubble--respect-line-break c-title-bubble--s" data-title="Search">
                            <button class="global-actions__button sprite-button">
                                <img src="/static/images/actions/search-icon.png" align="center" width="30">
                            </button>
                        </div>
                    </li>';
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
