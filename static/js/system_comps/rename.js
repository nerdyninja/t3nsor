$(document).ready(function(e) {
    //On Submitting Rename Form
    $("#rename_modal_form").submit(function(event){
        //Get Form Details
        var rename_new_name = $("#rename_new_name").val();
        var rename_name = $("#rename_name").val();
        var rename_type = $("#rename_type").val();
        var rename_folder_key = $("#rename_folder_key").val();
        var rename_file_key = $("#rename_file_key").val();
        //If required from data is not empty
        if(rename_name != "" && rename_new_name != ""){
            $.post("/_controller_/t3nsor_rename.php",{"rename_new_name":rename_new_name,"rename_name":rename_name,"rename_type":rename_type,"rename_folder_key":rename_folder_key,"rename_file_key":rename_file_key},
            function(data){
                //If correct details, Create Folder
                var show_type = "";
                if(rename_type == "files") show_type = "File";
                else if(rename_type == "photos")show_type = "Photo";
                else show_type = "Folder";

                if(data==true){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-error");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-success");
                    $("#notify-msg").html('<i class="fa fa-check"></i> ' + show_type + ' <b>' + rename_name +' </b> renamed as <b>' + rename_new_name + '</b> successfully!');
                    $("#notify").fadeOut(2000);
                    setTimeout(function(){
                        location.href = $(location).attr('href');
                    },1500);
                }
                else if(data == "exists"){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-error");
                    $("#notify").addClass("server-warning");
                    $("#notify-msg").html('<i class="fa fa-warning"></i> ' + show_type + ' <b>' + rename_new_name + '</b> already exists!');
                    $("#notify").fadeOut(2000);
                }
                else{
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-error");
                    $("#notify-msg").html('<i class="fa fa-warning"></i> Cannot rename the ' + show_type + ' <b>' + rename_name + '</b> !');
                    $("#notify").fadeOut(2000);
                }
            });   
        } 
        //If required data is empty
        else{

            var show_type = "";
            if(rename_type == "files") show_type = "File";
            else if(rename_type == "photos")show_type = "Photo";
            else show_type = "Folder";


            $("#notify").fadeIn(1000);
            $("#notify").css("display", "inline-block");
            $("#notify").removeClass("server-warning");
            $("#notify").removeClass("server-success");
            $("#notify").addClass("server-error");
            $("#notify-msg").html('<i class="fa fa-pencil"></i> Enter a new name for the ' + show_type + ' <b>' + rename_name + '</b> !');
            $("#notify").fadeOut(3000);
        }
        event.preventDefault();
  });
});


