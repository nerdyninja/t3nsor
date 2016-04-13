//Login

$(document).ready(function(e) {
    
    //On Submitting Log In Form
    $("#login_form").submit(function(event){
        
        $("#loading_img").fadeIn();
        $("#loading_img").fadeOut(1000);
                
        //Get Form Details
        var email    = $("#email").val();
        var password = $("#password").val();
        
        //If required from data is not empty
        if(email!="" && password!=""){
            $.post("/_controller_/t3nsor_login.php",{"email":email,"password":password},
            function(data){
                //If correct details, Login
                if(data==true){
                    $("#msg-box").fadeIn(1000);
                    $("#msg-box").css("display", "");
                    $("#msg-box").removeClass("alert-danger");
                    $("#msg-box").removeClass("alert-warning");
                    $("#msg-box").addClass("alert-success");
                    $("#msg-txt").html('<i class="fa fa-check"></i> Loading...');
                    $("#msg-box").fadeOut(2000);
                    setTimeout(function() {
                      window.location.href = "/home";
                    }, 500);
                }
                //If incorrect details
                else if(data==false){
                    setTimeout(function() {
                        ("#loading_img").css("display", "none");
                    }, 1000);
                    $("#msg-box").fadeIn(1000);
                    $("#msg-box").css("display", "");
                    $("#msg-box").removeClass("alert-success");
                    $("#msg-box").removeClass("alert-warning");
                    $("#msg-box").addClass("alert-danger");
                    $("#msg-txt").html('<i class="fa fa-warning"></i> Incorrect Details!');
                    $("#msg-box").fadeOut(3000);
                }
                //If account not confirmed
                else if(data=="not comfirmed"){
                    setTimeout(function() {
                        ("#loading_img").css("display", "none");
                    }, 1000);
                    $("#msg-box").fadeIn(1000);
                    $("#msg-box").css("display", "");
                    $("#msg-box").removeClass("alert-danger");
                    $("#msg-box").removeClass("alert-success");
                    $("#msg-box").addClass("alert-warning");
                    $("#msg-txt").html(data);
                    $("#msg-box").fadeOut(5000);
                }
            });   
        } 
        //If required data is empty
        else{
            setTimeout(function() {
                ("#loading_img").css("display", "none");
            }, 1000);
            $("#msg-box").fadeIn(1000);
            $("#msg-box").css("display", "");
            $("#msg-box").removeClass("alert-warning");
            $("#msg-box").removeClass("alert-success");
            $("#msg-box").addClass("alert-danger");
            $("#msg-txt").html('<i class="fa fa-pencil"></i> Enter Details!');
            $("#msg-box").fadeOut(3000);
        }

        event.preventDefault();
  });
});