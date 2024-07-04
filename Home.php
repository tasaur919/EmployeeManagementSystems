<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* * {
            margin: 0;
            padding: 0;
        } */

        .sidebar {
            width: 160px;
            height: 100vh;
            background-color: black;
            color: #fff;
            padding: 10px;
            float: left;
            /* position: fixed;
            margin-left: 0; */
        }

        .sidebar a {
            text-decoration: none;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 22px;
            color: #fff;
            text-align: left;

        }

        .sidebar a:hover {
            color: darkturquoise;

        }

        #main {
            padding: 0px;
            padding-left: 40px;
        }

        #main img {
            width: 90%;
            height: 100vh;
            object-fit: cover;
        }

        /* #main img {
            height: 40%;
            margin-bottom: 110px;
        } 
        #main img {
            width: 89%;
            height: auto;
            object-fit: cover;
            margin-bottom: 200px;
        } */

        i {
            font-size: 45px;
            width: 20%;
            height: 70px;
            margin-left: 0;
            margin-top: 40px;
        }

        body {
            overflow: hidden;
            max-width: 100vw;
            max-height: 100vh;
        }
    </style>
</head>

<body>





    <div class="sidebar">
        <!-- <h2>logo</h2> -->

        <ul>
            <?php
            // PHP code to generate sidebar items dynamically
            $sidebar_items = array("Home", "AdminLogIn", "SignUp", "Contact", "Back");
            // '<i class="fa-light fa-house"></i>';
            echo '<i class="fa-solid fa-users-rectangle"></i>';
            echo  "<li><a href='Home.php'>$sidebar_items[0]<br><br><br></a></li>";
            echo  "<li><a href='login.php'>$sidebar_items[1]<br><br><br></a></li>";
            echo  "<li><a href='signIn.php'>$sidebar_items[2]<br><br><br></a></li>";
            echo  "<li><a href='contactus.php'>$sidebar_items[3]<br><br><br></a></li>";
            // echo  "<li class='back'><a href='button.php'>$sidebar_items[4]<br><br><br></a></li>";

            // foreach ($sidebar_items as $item) {
            //     echo "<li><a href='#'>$item<br><br><br></a></li>";
            // }
            // 
            ?>
        </ul>
    </div>

    <div class="content" id="main">

        <img src="frontlogo.jpg" alt="not fount">
        <!-- <marquee behavior="" direction="">
            <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
        </marquee> -->

    </div>

    <script src="https://kit.fontawesome.com/4cf4a84a6c.js" crossorigin="anonymous"></script>
</body>

</html>