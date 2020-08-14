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
<style>
    #success-message{
        background: #DEF1D8;
        color: green;
        padding: 10px;
        margin: 10px;
        display: none;
        position: absolute;
        right: 15px;
        top: 15px;
    }
    #error-message{
        background: #EFDCDD;
        color: red;
        padding: 10px;
        margin: 10px;
        display: none;
        position: absolute;
        right: 15px;
        top: 15px;
    }
    .delete-btn{
        background: red;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    .edit-btn{
        background: green;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
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
        });
    </script>
</body>
</html>