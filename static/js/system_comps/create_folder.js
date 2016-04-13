$(document).ready(function(e) {
    //On Submitting Create Folder Form
    $("#create_folder_form").submit(function(event){
        //Get Form Details
        var folder_name = $("#folder_name").val();
        //If required from data is not empty
        if(folder_name != ""){
            $.post("/_controller_/t3nsor_create_folder.php",{"folder_name": folder_name},
            function(data){
                //If correct details, Create Folder
                if(data==true){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-error");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-success");
                    $("#notify-msg").html('<i class="fa fa-check"></i> Folder <b>' + folder_name + '</b> created successfully!');
                    $("#notify").fadeOut(2000);
                    setTimeout(function() {
                      window.location.href = "/home";
                    }, 500);
                }
                else if(data == "exists"){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-error");
                    $("#notify").addClass("server-warning");
                    $("#notify-msg").html('<i class="fa fa-warning"></i> Folder <b>' + folder_name + '</b> already exists!');
                    $("#notify").fadeOut(2000);
                }
                else{
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-error");
                    $("#notify-msg").html('<i class="fa fa-warning"></i> Folder <b>' + folder_name + '</b> cannot be created!');
                    $("#notify").fadeOut(2000);
                }
            });   
        } 
        //If required data is empty
        else{
            $("#notify").fadeIn(1000);
            $("#notify").css("display", "inline-block");
            $("#notify").removeClass("server-warning");
            $("#notify").removeClass("server-success");
            $("#notify").addClass("server-error");
            $("#notify-msg").html('<i class="fa fa-pencil"></i> Enter the name of folder!');
            $("#notify").fadeOut(3000);
        }
        event.preventDefault();
  });
});


