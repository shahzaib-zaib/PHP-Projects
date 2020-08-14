<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="text-center">
                    <h1>PHP with AJAX</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <div id="admin-content">
        <div class="container">
            <form id="addform">
                <div class="row">
                    <div class="col-md-5">
                        First Name : <input type="text" id="fname">
                    </div>
                    <div class="col-md-5">
                        Last Name : <input type="text" id="lname" >
                    </div>
                    <div class="col-md-2">
                        <input type="submit" id="save-button" value="Save">
                    </div>
                </div>
            </form>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table id="table-data" class="content-table">
                        
                    </table>
                </div>
                <div id="error-message"></div>
                <div id="success-message"></div>
                <div id="modal">
                    <div id="modal-form">
                        <h2>Edit Form</h2>
                        <table cellpadding="10px" width="100%">
                        </table>
                        <div id="close-btn">X</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div id ="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© Copyright 2020 News | Powered by Shahzaib</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer -->
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(document).ready(function(){
            function loadTable(){
                $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    success : function(data){
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();

            $("#save-button").on("click", function(e){
                e.preventDefault();
                var fname = $("#fname").val();
                var lname = $("#lname").val();

                if(fname == "" || lname == ""){
                    $("#error-message").html("All fields are required.").slideDown();
                    $("#success-message").slideUp();
                }else{
                    $.ajax({
                    url : "ajax-insert.php",
                    type : "POST",
                    data : {first_name:fname, last_name:lname},
                    success : function(data){
                        if(data == 1){
                            loadTable();
                            $("#addform").trigger("reset");
                            $("#success-message").html("Data Inserted successfully.").slideDown();
                            $("#error-message").slideUp();
                        }else{
                            $("#error-message").html("Can't Save Record.").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
                }
            });

            $(document).on("click", ".delete-btn", function(){
               if(confirm("Are you sure you want to delete this ?")){
                var studentId = $(this).data("id");
                    var element = this;

                    $.ajax({
                        url : "ajax-delete.php",
                        type: "POST",
                        data: {id : studentId},
                        success: function(data){
                            if(data = 1){
                                $(element).closest("tr").fadeOut();
                            }else{
                                $("#error-message").html("Can't Delete Record.").slideDown();
                                $("#success-message").slideUp();
                            }
                        }
                    });
               }
            });

            //Show Modal Box
            $(document).on("click", ".edit-btn", function(){
                $("#modal").show();
                 var studentId = $(this).data("eid");
                 
                 $.ajax({
                     url: "load-update-form.php",
                     type: "POST",
                     data: {id: studentId},
                     success: function(data){
                        $("#modal-form table").html(data);
                     }
                 })

            });

            //Hide Modal Box
            $("#close-btn").on("click", function(){
                $("#modal").hide();
            });

        });
    </script>
</body>
</html>