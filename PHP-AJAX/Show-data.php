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
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Users</h1>
                </div>
                <div class="col-md-2">
                    <input type="button" id="load-button" value="Load Data">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="table-data" class="content-table">
                        
                    </table>
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
    <script>
        $(document).ready(function(){
            $("#load-button").on("click", function(e){
                $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    success : function(data){
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>