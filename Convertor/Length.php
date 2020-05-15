<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Convertor</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg">
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Convertor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Length <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Currency</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Temp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Volume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Weight</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Area</a>
            </li>
        </ul>
    </div>
    </nav>
</div>

<div class="main">        
    <div class="container">
        <div class="booking-form">
            <form  method="post" id="booking-form">
                <h2>Length Convertor</h2>
                <div class="form-group form-input">
                    <input type="number" name="number" required />
                    <label for="phone" class="form-label">Enter Your Value</label>
                </div>
                <select name="choose" id="">
                    <option value = "null">--select--</option>
                    <option value = "cm">Centimeter</option>
                    <option value = "meter">Meter</option>
                    <option value = "kilometer" >Kilometer</option>
                    <option value = "foot">Feet</option>
                    <option value = "inches">Inch</option>
                    <option value = "miles">Miles</option>
                    <option value = "yards">Yards</option>
                </select>
                <div class="form-submit">
                    <input type="submit" value="Convert Value" class="submit" id="submit" name="submit" />
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>