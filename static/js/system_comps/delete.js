$(document).ready(function(e) {
    //On Submitting Rename Form
    $("#delete_modal_form").submit(function(event){
        //Get Form Details
        var delete_name = $("#delete_name").val();
        var delete_type = $("#delete_type").val();
        var delete_folder_key = $("#delete_folder_key").val();
        var delete_file_key = $("#delete_file_key").val();
        //If required from data is not empty
        if(delete_name != "" && delete_type != ""){
            $.post("/_controller_/t3nsor_delete.php",{"delete_name":delete_name,"delete_type":delete_type,"delete_folder_key":delete_folder_key,"delete_file_key":delete_file_key},
            function(data){
                //If correct details, Create Folder
                var show_type = "";
                if(delete_type == "files") show_type = "File";
                else if(delete_type == "photos")show_type = "Photo";
                else show_type = "Folder";

                if(data==true){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-error");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-success");
                    $("#notify-msg").html('<i class="fa fa-check"></i> ' + show_type + ' <b>' + delete_name +'</b> deleted successfully!');
                    $("#notify").fadeOut(2000);
                    setTimeout(function(){
                        location.href = $(location).attr('href');
                    },1500);
                }
                else{
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-error");
                    $("#notify-msg").html('<i class="fa fa-warning"></i> Cannot delete the ' + show_type + ' <b>' + delete_name + '</b> !');
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
            $("#notify-msg").html('<i class="fa fa-warning"></i> Some Error !');
            $("#notify").fadeOut(3000);
        }
        event.preventDefault();
  });
});


