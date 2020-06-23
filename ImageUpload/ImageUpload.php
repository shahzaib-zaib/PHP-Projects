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
                $imagename = $_FILES['ImageAyi']['name'][$i];
                $imagetype = $_FILES['ImageAyi']['type'][$i];
                $imagetemp = $_FILES['ImageAyi']['temp_name'][$i];
                $imageerror = $_FILES['ImageAyi']['error'][$i];
                $imagesize = $_FILES['ImageAyi']['size'][$i];
            }

    ?>
</body>
</html>