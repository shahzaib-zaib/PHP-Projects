<?php

    $con = mysqli_connect("localhost", "root", "", "test") or die("connection Failed");

    $sql = "SELECT * FROM students";

    $result = mysqli_query($con, $sql) or die("SQL Query Failed.");
    $output = "";
    if(mysqli_num_rows($result) > 0){
        $output = '<table borde="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>';

        while($row = mysqli_fetch_assoc($result)){
            $output .="<tr><td>{$row["Id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td></tr>";
        }
        $output .="</table>";

        mysqli_close($con);

        echo $output;
    }else{
        echo "<h2>No Record Found.</h2>";
    }
?>