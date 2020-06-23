<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload Image : </label>
        <input type="file" name="ImageAyi">
        <input type="submit" value="Upload" name="btn">
    </form>

    <?php

        error_reporting(0);


            if (isset($_POST['btn'])) 
            {
                echo "<pre>";
                print_r($_FILES['ImageAyi']);
                echo "</pre>";
                $imagename = $_FILES['ImageAyi']['name'];
                $imagetype = $_FILES['ImageAyi']['type'];
                $imagetemp = $_FILES['ImageAyi']['temp_name'];
                $imageerror = $_FILES['ImageAyi']['error'];
                $imagesize = $_FILES['ImageAyi']['size'];

                if (strtolower($imagetype) == "image/jpeg" || strtolower($imagetype) == "image/jpg" ) {
                    echo "<script>
                            alert('File Accepted');
                          </script>"
                } else {
                    echo "<script>
                            alert('Extension Not Supported, jpeg and jpg formats are allowed only');
                          </script>"
                }
                
            }

    ?>
</body>
</html>