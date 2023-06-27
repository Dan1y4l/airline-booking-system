<?php
    include ('header.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" href="../pictures/Login-logo.jpg" type="image/x-icon"> <!-- to change the icon in brower tab -->
    <link rel="stylesheet" href="homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cousine&family=Montserrat:ital,wght@0,400;1,200&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="stroke">
        
        <ul>
            <li><a href="Admin_homepage.php">Home</a></li>
            <li><a href="View all user.php">Book Flight</a></li>
            <li><a href="view_validate_report.php">Manage Booking</a></li>
            <a href="#"><img class="nav-pic" src="../pictures/Login-logo.jpg" id="user-profile"></a>
        </ul>

     </nav>

     <div class="home-page">
        <img class="background-pic" src="../pictures/background-image.jpg" style="width: 100%; "> 
        <div class="main-pic">
            <p class="cCaption">Best & cheapest airline<br> booking website</p>
            <p class="cCaption2"><i>"RECOMENDED BY MANY AIRLINES"</i></p>
            <a href="Student/add_practical_training.php"><button class="button">book Now!</button></a>
        </div>

     </div>
        
</body>

</html>



