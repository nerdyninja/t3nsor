$(document).ready(function(e) {
    //On Submitting move Form
    $("#copy_modal_form").submit(function(event){
        //Get Form Details
        var copy_new_folder_key = $("#copy_new_folder_key").val();
        var copy_name = $("#copy_name").val();
        var copy_type = $("#copy_type").val();
        var copy_folder_key = $("#copy_folder_key").val();
        var copy_file_key = $("#copy_file_key").val();
        //If required from data is not empty
        if(copy_new_folder_key != "" && copy_file_key != "" && copy_name != ""){
            $.post("/_controller_/t3nsor_copy.php",{"copy_new_folder_key":copy_new_folder_key,"copy_name":copy_name,"copy_type":copy_type,"copy_folder_key":copy_folder_key,"copy_file_key":copy_file_key},
            function(data){
                //If correct details, Create Folder
                if(data==true){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-error");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-success");
                    $("#notify-msg").html('<i class="fa fa-check"></i> File ' + copy_name + '</b> copied successfully!');
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
                    $("#notify-msg").html('<i class="fa fa-warning"></i> <b>' + copy_name + '</b> already exists there!');
                    $("#notify").fadeOut(2000);
                }
                else{
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-success");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-error");
                    $("#notify-msg").html(data);
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
            $("#notify-msg").html('<i class="fa fa-warning"></i> Choose a location!');
            $("#notify").fadeOut(3000);
        }
        event.preventDefault();
  });
});


