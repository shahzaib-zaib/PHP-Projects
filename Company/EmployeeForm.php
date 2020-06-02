<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Please Enter Your Name : </label>
        <input type="text" name="name" id="">
        <br><br>
        <label for="">Please Enter Your Email : </label>
        <input type="text" name="email" id="">
        <br><br>
        <label for="">Please Enter Your Gneder : </label>
        <input type="radio" name="gender" id="" value="Male">Male
        <input type="radio" name="gender" id="" value="Female">Female
        <br><br>
        <label for="">Please Enter Your Phone Number : </label>
        <input type="text" name="number" id="">
        <br><br>
        <label for="">Please Select Your Qualification :</label>
        <select name="qualification" id="">
            <option value="matric">Matric</option>
            <option value="intermediat">Intermediat</option>
            <option value="bachelors">Bachelors</option>
            <option value="master">Master</option>
        </select>
        <br><br>
        <label for="">Please Enter Your Salary : </label>
        <input type="text" name="salary" id="">
        <br><br>

        <input type="submit" name="savebtn" id="" value="Save">

    </form>


    <?php

        $con = mysqli_connect("localhost:3306", "", "", "companydb");
        if (isset($_POST["savebtn"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $number = $_POST["number"];
            $qualification = $_POST["qualification"];
            $salary = $_POST["salary"];

            $insert_query = "insert into employee(EmpName, EmpEmail, EmpGender, EmpPhoneNumber, EmpQualification, EmpSalary)
            value ('$name', '$email', '$gender', '$number', '$qualification', '$salary')";


            $execute = mysqli_query($con, $insert_query);

            if ($execute == true) {
                echo "<script>
                    alert('Data saved Successfully');
                </script>";
            } else {
                echo "<script>
                    alert('Data not saved Successfully');
                </script>";
            }
        }

    ?>

    
</body>
</html>