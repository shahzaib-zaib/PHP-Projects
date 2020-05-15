<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="main">

<div class="container">
    <div class="booking-content">
        <div class="booking-image">
            <img class="booking-img" src="images/form-img.jpg" alt="Booking Image">
        </div>
        <div class="booking-form">
            <form id="booking-form">
                <h2>Welcome to Hotel Arina</h2>
                <div class="form-group form-input">
                    <input type="text" name="name" id="name" value="" required/>
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="form-group form-input">
                    <input type="email" name="email" id="email" value="" required />
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="form-group form-input">
                    <input type="number" name="phone" id="phone" value="" required />
                    <label for="phone" class="form-label">Phone</label>
                </div>
                <div class="form-group form-input">
                    <input type="text" name="address" id="address" value="" required />
                    <label for="address" class="form-label">Address</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">I agree the terms & conditions</label>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Send Request" class="submit" id="submit" name="submit" />
                    <a href="#" class="vertify-booking">Verify your booking info from your phone</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

    <?php


    ?>
    
</body>
</html>