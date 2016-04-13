<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/_controller_/auth_mods/session_mod.php';
$title = "Settings";
$sel = '6';
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

                
                <div id="quota" class="fieldset settings-section bottom-border" style="margin-top:120px;">
                	<h2>Space</h2>
                	<div>
                		<div class="bar-graph">
                			<div style="width:<?php ($total_files/$total)*100 ?>%;" class="bar-graph-part bar-graph-normal None"></div>
                			<div style="width:<?php ($total_photos/$total)*100 ?>%;" class="bar-graph-part bar-graph-shared None"></div>
                			<br class="clear">
                		</div> 
                		<div class="bar-graph-key ">
                			<div class="space-key">
                				<span class="quota-percent"><?php echo read_size($total); ?> of 250 MB used</span>
                				<div class="bar-graph-legend-group">
                					<div class="bar-graph-legend bar-graph-normal"></div>
                					<span class="bar-graph-key-text">Files (<?php echo read_size($total_files); ?>)</span>
                				</div>
	                			<div class="bar-graph-legend-group">
	                				<div class="bar-graph-legend bar-graph-shared"></div>
	                				<span class="bar-graph-key-text">Photos (<?php echo read_size($total_photos); ?>)</span>
	                			</div>
	                			<div class="bar-graph-legend-group">
	                				<div class="bar-graph-legend bar-graph-free"></div>
	                				<span class="bar-graph-key-text">Unused space (<?php echo read_size(262000000 - $total); ?>)</span>
	                			</div>
                			</div>
                		</div>
                	</div>
                </div>

                <div id="quota" class="fieldset settings-section bottom-border">
                    <h2>Security</h2>
                    <div>
                        <div class="password-section">
                            <div>   
                                <button class="button-as-link show-change-password" onclick="showpass()">Change password</button>
                            </div>
                            <form method="POST" class="password-reset-form clearfix" id="change_pass" style="display:none;">
                                <div class="text-input standard email-field">
                                    <div id="error-message2" class="text-input-error-wrapper"></div>
                                    <div class="text-input-wrapper" >
                                        <input class="text-input-input" style="font-size:14px;" type="password" placeholder="Old Password" name="old_pw" id="old_pw">
                                    </div>
                                    <div class="text-input-wrapper" >
                                        <input class="text-input-input" style="font-size:14px;" type="password" placeholder="New Password" name="new_pw" id="new_pw">
                                    </div>
                                </div>

                                <button class="button-tertiary" type="submit">Change Password</button>
                                <button type="button" style="background-color:transparent!important;" onclick="closepass()">
                                    <img src="/static/images/views/icon_spacer.gif" class="sprite sprite_web s_web_disable" align="center">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(e) {
                //On Submitting Form
                $("#change_pass").submit(function(event){
                    //Get Form Details
                    var old_pw = $("#old_pw").val();
                    var new_pw = $("#new_pw").val();
                    //If required from data is not empty
                    if(old_pw != "" && new_pw != ""){
                        $.post("/_controller_/auth_mods/t3nsor_changepw.php",{"old_pw":old_pw,"new_pw":new_pw},
                        function(data){
                            if(data==true){
                                $("#notify").fadeIn(1000);
                                $("#notify").css("display", "inline-block");
                                $("#notify").removeClass("server-error");
                                $("#notify").removeClass("server-warning");
                                $("#notify").addClass("server-success");
                                $("#notify-msg").html('<i class="fa fa-check"></i> Password changed successfully!');
                                $("#notify").fadeOut(2000);
                                setTimeout(function(){
                                    location.href = $(location).attr('href');
                                },1500);
                            }
                            else if(data == "wrong"){
                                $("#notify").fadeIn(1000);
                                $("#notify").css("display", "inline-block");
                                $("#notify").removeClass("server-success");
                                $("#notify").removeClass("server-warning");
                                $("#notify").addClass("server-error");
                                $("#notify-msg").html('<i class="fa fa-warning"></i> Incorrect Details!');
                                $("#notify").fadeOut(2000);
                            }
                            else{
                                $("#notify").fadeIn(1000);
                                $("#notify").css("display", "inline-block");
                                $("#notify").removeClass("server-success");
                                $("#notify").removeClass("server-warning");
                                $("#notify").addClass("server-error");
                                $("#notify-msg").html('<i class="fa fa-warning"></i> Some Error!');
                                $("#notify").fadeOut(2000);
                            }
                        });   
                    } 
                    //If required data is empty
                    else{
                        $("#notify").fadeIn(1000);
                        $("#notify").css("display", "inline-block");
                        $("#notify").removeClass("server-error");
                        $("#notify").removeClass("server-success");
                        $("#notify").addClass("server-warning");
                        $("#notify-msg").html('<i class="fa fa-pencil"></i> Enter required details!');
                        $("#notify").fadeOut(3000);
                    }
                    event.preventDefault();
              });
            });



        </script>
        
<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/base_footer.php'; ?>