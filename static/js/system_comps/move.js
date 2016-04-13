$(document).ready(function(e) {
    //On Submitting move Form
    $("#move_modal_form").submit(function(event){
        //Get Form Details
        var move_new_folder_key = $("#move_new_folder_key").val();
        var move_name = $("#move_name").val();
        var move_type = $("#move_type").val();
        var move_folder_key = $("#move_folder_key").val();
        var move_file_key = $("#move_file_key").val();
        //If required from data is not empty
        if(move_new_folder_key != "" && move_file_key != "" && move_name != ""){
            $.post("/_controller_/t3nsor_move.php",{"move_new_folder_key":move_new_folder_key,"move_name":move_name,"move_type":move_type,"move_folder_key":move_folder_key,"move_file_key":move_file_key},
            function(data){
                //If correct details, Create Folder
                if(data==true){
                    $("#notify").fadeIn(1000);
                    $("#notify").css("display", "inline-block");
                    $("#notify").removeClass("server-error");
                    $("#notify").removeClass("server-warning");
                    $("#notify").addClass("server-success");
                    $("#notify-msg").html('<i class="fa fa-check"></i> File ' + move_name + '</b> moved successfully!');
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
                    $("#notify-msg").html('<i class="fa fa-warning"></i> <b>' + move_name + '</b> already exists there!');
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


