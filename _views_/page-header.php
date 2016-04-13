<div id="page-header" class="minimal-header">
    <div id="inner-page-header">
        <div id="account-header" class="show-account-photo">
            <ul class="nav">  
                <li class="hack" style="display:none;"><div id="component373" class=""></div></li>
                <li id="header-account-menu" class="top-level-nav-item">
                    <span>
                        <button class="header-nav-link button-as-link bubble-dropdown-target bubble-dropdown-target" onclick="account_dropdown()">
                            <span class="avatar-wrapper" id="pyxl375">
                                <img width="24" height="24" class="u-l-ib--m avatar-component u-l-ib" src="/static/images/views/icon_spacer.gif" />
                            </span><span class="drp-name">Omkar Prabhu</span>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        
                        <div class="bubble-dropdown top-right dropdown-content"  id="account-dropdown">
                            <div class="account-dropdown">
                                <div class="title o-flag" id="drop">
                                    <div class="o-flag__fix u-pad-right-xs clickable" id="pyxl371">
                                        <div class="avatar-wrapper" id="pyxl377">
                                            <div class="c-title-bubble c-title-bubble--s" data-title="Omkar Prabhu" style="vertical-align:-webkit-baseline-middle;">
                                                <button class="c-avatar--no-img c-avatar--circle u-unbutton c-avatar c-avatar--s" id="c-t3">    <span>OP</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-container o-flag__flex">
                                        <span class="name"><?php echo $_SESSION['T3_SESSION_FNAME']." ".$_SESSION['T3_SESSION_LNAME']; ?></span>
                                    </div>
                                </div>
                                <ul>
                                    <?php
                                    $total_files = $total_photos = 0;
                                    require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/t3_database_connect.php';
                                    $sum_id = $_SESSION['T3_SESSION_ID'];
                                    $sum_files = mysqli_query($connection, "SELECT * from files WHERE user_id='$sum_id'");
                                    while($row = mysqli_fetch_assoc($sum_files)){
                                        $total_files += $row['size'];
                                    }
                                    $sum_photos = mysqli_query($connection, "SELECT * from photos WHERE user_id='$sum_id'");
                                    while($row = mysqli_fetch_assoc($sum_photos)){
                                        $total_photos += $row['size'];
                                    }
                                    function read_size($size, $precision = 1) {
                                        if($size == 0)return "0 B";
                                        else{ 
                                            $base = log($size, 1024);
                                            $size_suffix = array('', 'KB', 'MB', 'GB', 'TB');   
                                            return round(pow(1024, $base - floor($base)), $precision) .' '. $size_suffix[floor($base)];
                                        }
                                    }
                                    $total = $total_photos + $total_files;
                                    ?>
                                    <div class="email force-no-break"><?php echo $_SESSION['T3_SESSION_EMAIL']; ?></div>
                                    <div class="subheader-gray-text"><?php echo read_size($total); ?> of 250 MB used</div>
                                    <div class="quota_graph_container">
                                        <div style="width: 20%;" class="quota_graph_bar ">
                                        </div>
                                    </div>
                                    <li class="first-standalone">
                                        <a href="/settings" target="_blank" class="standalone clearfix">Settings</a>
                                    </li>
                                    <li>
                                        <a href="/activity" class="standalone clearfix">Activity</a>
                                    </li>
                                    <li class="exp-dropdown-upsell-none">
                                        <a href="/" class="standalone clearfix">Referrals</a>
                                    </li>
                                    <li>
                                        <a href="/logout" class="standalone clearfix">Log out</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bubble-arrow-border"></div>
                            <div class="bubble-arrow"></div>
                        </div>

                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>