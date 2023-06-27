<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Booking System</title>
    <link rel="shortcut icon" href="Login-logo.jpg" type="image/x-icon"> <!-- to change the icon in brower tab -->

    <link rel="stylesheet" href="Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cousine&family=Montserrat:ital,wght@0,400;1,200&display=swap" rel="stylesheet">

</head>

<body>

    <div class="login-page">

        <div class="form">

            <div class="logo-container">  
                <a href="Login.php"> <img src="Login-logo.jpg" alt="logo" id="image-logo-1"></a>
                <p class="title">Airline Ticket Booking System </p>
            </div>

            <h1 style="color: white;">WELCOME</h1>

            <form class="register-form" method="post" action="Login.php">

                <input type="text" name="username" placeholder="Username" required>
                <br> <br>

                <input type="password" name="password" placeholder="Password" required>
                <br> <br>
                    
                <input class="sign-in-button" type="submit" value="sign in">

                <p style="color : white"> Dont have a account? <a class="anker-register" href="Login.php" 
                style="color : white; font-weight: bold;">Register</a></p>
                
            </form>


        </div>

    </div>



</body>
