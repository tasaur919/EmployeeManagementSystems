<?php
include("Connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        background-image: url(loginlogo.jpg);
        object-fit: cover;
        background-repeat: no-repeat;
        background-size: 100% 100vh;
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
        margin-top: 160px;
        background-color: wheat;
    }

    img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        padding-top: 0 20px;
    }

    h3 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    h1 {
        color: navy;
        font-size: 40px;
        font-weight: 900;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serifS;
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
        height: 370px;
        background-color: transparent;
    }

    .form h3 a {
        color: blue;
    }

    #submit {
        background-color: transparent;
    }

    #submit:hover {
        background-color: navy;
        color: white;
    }


    #form {
        position: absolute;
        top: 20%;
        left: 18%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        justify-content: left;
        align-items: center;
        margin-right: 100%;

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

    body {
        overflow: hidden;
        max-width: 100vw;
        max-height: 100vh;
    }
</style>

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
    <div id="form">
        <div class="form">
            <h1>Admin Login</h1>

            <?php

            if (isset($_GET['empty'])) {
                $message = $_GET['empty'];
                $message = "Please Enter your correct information";
            ?>
                <div class="alert"><?php echo $message ?></div>
            <?php
            }

            ?>

            <!-- verify the password -->
            <?php

            if (isset($_GET['Invalid'])) {
                $message = $_GET['Invalid'];
                $message = "Invalid userId";
            ?>
                <div class="alert"><?php echo $message ?></div>
            <?php
            }

            ?>

            <!-- invalid password -->
            <?php

            if (isset($_GET['P_Invalid'])) {
                $message = $_GET['P_Invalid'];
                $message = "Invalid your Password";
            ?>
                <div class="alert"><?php echo $message ?></div>
            <?php
            }

            ?>
            <form action="include/login1.php" method="POST">

                <div class="login">
                    <!-- <label>Email:</label> -->
                    <input type="email" name="email1" id="textfield" placeholder="Enter your Email id"><br>
                    <!-- <label>Password:</label> -->
                    <input type="password" name="password" id="textfield" onchange="user" placeholder="Enter Password">


                    <input type="submit" name="login1" id="submit" value="Login" src="manageEmp.php">
                    <input type="reset" id="submit" value="Reset">


                </div>
                <h3>Click here to signIn? <a href="signIn.php">signUp</a></h3>
            </form>
        </div>
    </div>
</body>

</html>

<!-- 
const user=()=>{
    c
}

 -->