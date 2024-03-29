<?php

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password))
        {
            $userid = random_num(20);
            $query = "INSERT INTO users 
            (userid, first_name, last_name, gender, email, password) 
            VALUES 
            ('$userid', '$first_name', '$last_name', '$gender', '$email', '$password')";

            mysqli_query($con, $query);

            header("Location: Login Page.php");
            die;

        } else
        {
            echo "Please enter valid information!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodlife Fitness | Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a href="Fitness Options.php">Fitness Options</a></li>
                <li><a href="Login Page.php">Login</a></li>
                <li><a href="Signup page.php">Join Today</a></li>
            </ul>
        </nav>
    </header>


    <div id="topbackground">
        <img id="image1" src="fitness high reso.jpg">
    </div>


    <div id="bar2">
        <form method="post" action="">
            <div>Sign up to Goodlife Account</div><br><br>
            <input name="first_name" type="text" id="text" placeholder="First Name"><br><br>
            <input name="last_name" type="text" id="text" placeholder="Last Name"><br><br>

            <span id="gender"> Gender: </span> <br>
            <select id="text" name="gender">
                <option>Male</option>
                <option>Female</option>
            </select> <br><br><br>

            <input name="email" type="text" id="text" placeholder="Email or Phone Number"><br><br>

            <input name="password" type="password" id="text" placeholder="Password"><br><br>
            <input name="repassword" type="password" id="text" placeholder="Retype Password"><br><br>

            <input type="submit" id="button" value="Sign Up"><br>
        </form>
    </div>


</body>

</html>