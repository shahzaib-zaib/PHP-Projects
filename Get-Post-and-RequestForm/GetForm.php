<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form Page</title>

</head>
<body>
    <form action="data.php" method="get">
        <label for="">Enter Your Name : </label>
        <input type="text" name="username">

        <br><br>

        <label for="">Enter Your Email : </label>
        <input type="email" name="useremail">

        <br><br>

        <label for="">Select Your Ticket Category : </label>
        <select name="category" id="">
            <option value="silver">Silver</option>
            <option value="silgoldver">Gold</option>
        </select>

        <br><br>

        <label for="">Select Timing : </label>
        <select name="timing" id="">
            <option value="evening">5 - 8</option>
            <option value="night">7 - 10</option>
            <option value="midnight">10 - 1</option>
        </select>

        <br><br>

        <label for="">Mode of Payment : </label>
        <input type="radio" value="cash" name="payment"> Cash
        <input type="radio" value="debit" name="payment"> Debit Card
        
        <br><br>

        <input type="submit" value="Book Now!" name="submitbtn">
    </form>
</body>
</html>