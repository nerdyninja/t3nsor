<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/session_mod.php';
$title = "Activity";
$sel = '7';
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

                
                <table class="settings-table five-col-table" style="margin-top:120px;">
                    <tbody> 
                        <tr class="settings-table-header">
                            <th class="first-col">Browser</th>
                            <th class="second-col"></th>
                            <th class="third-col">Location</th>
                            <th class="fourth-col">Most recent activity</th>
                            <th class="fifth-col"></th>
                        </tr>

                        <?php
                        $user_id = $_SESSION['T3_SESSION_ID'];
                        $get_session = mysqli_query($connection, "SELECT * from sessions WHERE user_id='$user_id'");
                        while($row = mysqli_fetch_assoc($get_session)){
                            echo'<tr class="settings-table-header">
                                    <td>
                                        <div class="sprite-div">
                                            <div class="sprite-frame small icon-left">
                                                <img src="/static/images/views/icon_spacer.gif" alt="" class=" sprite sprite_web s_web_s_browser_chrome">
                                            </div>
                                            <div class="sprite-text">
                                                <div class="sprite-text-inner">'.$row['browser'].'<br> <small>on '.$row['os'].'</small> </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div data-js-component-id="component18433" class="tooltip-wrapper">
                                            <div class="tooltip-prompt sprite-div">
                                                <div class="sprite-text">
                                                    <div class="sprite-text-inner">'.$row['location'].'</div>
                                                </div>
                                                <div class="sprite-frame small icon-right">
                                                    <img src="/static/images/views/icon_spacer.gif" alt="" class=" sprite sprite_web s_web_info">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-js-component-id="component18434" class="tooltip-wrapper">
                                            <div class="tooltip-bubble tooltip-tooltip" style="width: 188px; position: absolute; display: none;">
                                                <div class="tooltip-inner">
                                                    <div><strong>Signed in:</strong> '.$row['created_at'].'</div>
                                                    <div><strong>IP address:</strong> 103.248.31.142</div>
                                                </div>
                                            </div> 
                                            <div class="tooltip-prompt sprite-div">
                                                <div class="sprite-text">
                                                    <div class="sprite-text-inner">'.date('j M Y, g:i A', $row['created_at']).'</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td></tr>
                                </tr>';
                        }

                        ?>
                    </tbody>
                </table>

            </div>
        </div>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>