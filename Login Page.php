<?php

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password))
        {
            $query = "SELECT * FROM users WHERE email = '$email' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {
                        $_SESSION['userid'] = $user_data['userid'];
                        header("Location: web.php");
                        die;
                    }
                    
                }
            }

            echo "Wrong email or password! Please try again!";

        } else
        {
            echo "Wrong email or password! Please try again!";
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
        <div>Log in to Goodlife Account</div><br><br>

        <form method="post" action="">
            <input name="email" type="text" id="text" placeholder="Email or Phone Number"><br><br>
            <input name="password" type="password" id="text" placeholder="Password"><br><br>

            <input type="submit" id="button" value="Login"><br>
        </form>
    </div>


</body>

</html>

