<?php

    $student_id = $_POST['id'];

    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "SELECT * FROM students WHERE id = {$student_id}";

    $result = mysqli_query($con, $sql) or die("SQL Query Failed.");
    $output = "";
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            $output .="<tr>
                        <td>First Name</td>
                        <td><input type='text' name='' id='edit-fname' hidden value='{$row["id"]}'>
                        <input type='text' name='' id='edit-fname' value='{$row["first_name"]}'></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type='text' name='' id='edit-lname' value='{$row["last_name"]}'></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' name='' id='edit-submit' value='save'></td>
                    </tr>";
        }

        mysqli_close($con);

        echo $output;
    }else{
        echo "<h2>No Record Found.</h2>";
    }

?>