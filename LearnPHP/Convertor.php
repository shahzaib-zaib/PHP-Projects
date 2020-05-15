<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" methos="get">
        <label for="">Enter Weight in Kilogram : </label>
        <input type="number" name="weight">
        <br>
        <label for="">Select Unit to Convert : </label>
        <select name="unit" id="">
            <option>Select Unit</option>
            <option value="gram">Gram</option>
            <option value="pound">Pound</option>
            <option value="tonne">Tonne</option>
        </select>
        <br>
        <input type="submit" value="Convert" name="convertbtn"/>
    </form>

        <?php
            if(isset($_GET['convertbtn']))
            {
                $weight = $_GET['weight'];
                $unit = $_GET['unit'];

                    if($unit == "gram")
                    {
                        $answer = $weight * 1000;
                        echo "<h3>Weight in Gram is : " . $answer . "</h3>";
                    }
                    else if($unit == "pound")
                    {
                        $answer = $weight * 2.205;
                        echo "<h3>Weight in pound is : " . $answer . "</h3>";
                    }
                    else if($unit == "tonne")
                    {
                        $answer = $weight * 0.00110231;
                        echo "<h3>Weight in Tonne is : " . $answer . "</h3>";
                    }
                    else
                    {
                        echo "Please select any unit";
                    }
            }

        ?>
</body>
</html>