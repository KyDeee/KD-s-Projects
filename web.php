<?php

session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

$_SESSION

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodlife Fitness</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Fitness Options.php">Fitness Options</a></li>
                <li><a href="#clubs">Clubs</a></li>
                <li><a href="Login page.php">Login</a></li>
                <li><a href="Signup page.php">Sign Up</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div id="mainbackground">

        <div id="topbackground">
            <img id="image1" src="fitness high reso.jpg">
            <img id="profilepic" src="GreatLife Fitness.png"> <br>
        </div>

        <div id="namebelowlogo">
            You have successfully logged in!
        </div>
    </div>


</body>

</html>