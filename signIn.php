<?php
include("Connection.php");
// if (!$conn) {
//     die('Connection Error' . mysqli_error());
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url(signuplogo4.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100vh;

        }

        #submit:hover {
            background-color: darkturquoise;
        }

        body {
            overflow: hidden;
            max-width: 100vw;
            max-height: 100vh;
        }

        .form {
            width: 360px;
            height: 500px;
            background-color: transparent;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 28%;
            transform: translate(-50%, -50%);
            border-radius: 6px;
        }

        .menu {
            background-color: #006699;
            width: 100%;
            height: 80px;
            border: 1px solid ghostwhite;
            position: sticky;
            margin-top: 0;


        }

        .center {
            padding-top: 0px;
            margin-top: 40px;
            background-color: khaki;
        }

        img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            padding-top: 0 20px;
        }

        h1 {
            color: darkturquoise;
            font-size: 40px;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;


        }

        .backgrountcolor {
            background-color: yellow;
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 150px;
        }

        .form {
            margin-top: 15px;
            height: 500px;
            background-color: palegreen;
        }

        .form {
            background-color: transparent;
        }

        .form h3 a {
            color: blue;
        }

        .form h3 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .alert {
            color: green;
        }

        nav button {
            width: 80px;
            height: 40px;
            border-radius: 8px;
            color: black;
            font-size: 22px;
        }

        nav button a {
            text-decoration: none;
            color: black;
        }

        nav button:hover {
            background-color: black;

        }

        nav button a:hover {
            color: #fff;
        }

        nav button i:hover {
            color: #fff;
            background-color: #fff;

        }
    </style>
</head>

<body>
    <nav>
        <button><i class="fa-sharp fa-solid fa-arrow-left"></i><a href="Home.php">Back</a></button>
    </nav>
    <!-- <div class="menu">
        <php
        include 'Addmenu.php'
        ?>
    </div> -->
    <!-- <div class="backgrountcolor">
        <center>
            <h1><img src="logo.jpg" alt="logo.jpg" srcset=""> R.D.ENGINEERING COLLEGE DUHAI GHAZIABAD</h1>
        </center>
    </div> -->
    <hr>
    <div class="form">
        <h1>SignIn Form</h1>

        <!-- 
            display empty fields
         -->
        <?php
        if (isset($_GET['empty'])) {
            $message = $_GET['empty'];
            $message = "Please Fill in the Blanks!";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>


        <!-- 
            Invalid or missmatch charactors
         -->
        <?php
        if (isset($_GET['invalid'])) {
            $message = $_GET['invalid'];
            $message = "Invalid Charactors!";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>


        <!-- 
            Invalid or missmatch Email
         -->
        <?php
        if (isset($_GET['email1'])) {
            $message = $_GET['email1'];
            $message = "Invalid Email!";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>


        <!-- 
           Invalid userid
         -->
        <?php
        if (isset($_GET['user'])) {
            $message = $_GET['user'];
            $message = "UserName all-ready exist!";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>
        <!-- invalid Email id -->
        <?php
        if (isset($_GET['email'])) {
            $message = $_GET['email'];
            $message = "Email Id is all-ready exist!";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>


        <!-- 
            successfully login with password
         -->
        <?php
        if (isset($_GET['pass'])) {
            $message = $_GET['pass'];
            $message = "You have Successfully login";
        ?>
            <div class="alert"><?php echo $message ?></div>
        <?php
        }


        ?>
        <form action="include/signup.php" method="POST">

            <div class="login">
                <input type="text" id="textfield" name="name" placeholder="Enter your First name" require>
                <input type="text" id="textfield" name="lname" placeholder="Enter your Last name">
                <input type="email" id="textfield" name="email" placeholder="Enter your Email id" require>
                <input type="text" id="textfield" name="username" placeholder="Enter Username">
                <input type="password" name="password" id="textfield" placeholder="Enter Password" require>
                <input type="submit" id="submit" name="save" value="SignIn">
                <input type="reset" id="submit" value="Reset">


            </div>
            <h3>Click here to LoginPage? <a href="Login.php">LogIn</a></h3>
        </form>
    </div>

</body>

</html>