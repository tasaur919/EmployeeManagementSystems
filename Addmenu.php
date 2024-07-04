<html>

<head>

    <link rel="stylesheet" href="">
    <style>
        body {
            background-color: wheat;
            /* background-image: url(./logo.jpg);*/

        }

        body ul {
            width: 100%;
            height: 100px;
            margin: 0;
            padding: 0;
            margin-left: 0px;
            font-size: large;
            padding-top: 0;
        }



        li {

            width: 100%;
            height: 50px;

            line-height: 10px;
            font-family: verdana;
            font-size: 12px;
            background-color: black;

            float: left;
            text-align: left;
            list-style-type: none;
            /* text-align: center; */
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: left;
            /* margin: 40px; */
            padding: 20px;
        }

        li button {
            margin-left: 40%;
            height: 50px;
            width: 80px;
            border-radius: 6px;
            background-color: black;
            color: white;
            border: 2px solid gray;
            font-size: 14px;
            font-weight: 800;

        }

        button {
            height: 50px;
            width: 180px;
            border-radius: 6px;
            background-color: black;
            color: white;
            border: 2px solid gray;
            font-size: 14px;
            font-weight: 800;
        }

        .sidebar ul li a {
            text-align: left;
            display: flex;
            margin-left: 10px;
            /* margin-top: 80px; */

        }

        .sidebar ul li {
            width: 130px;
            height: 90px;
            /* margin-top: 60px; */
            /* padding-top: 80px; */
        }

        .sidebar ul li i {
            margin-top: 60px;
            display: none;
        }







        a {
            color: white;
            text-decoration: none;

        }

        ul ul {
            margin-left: 0px;
            display: none;

        }





        body ul li img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            /* padding-top: 0 10px; */
            display: flex;
            margin-left: 10px;
        }

        h1 {
            color: red;
            font-size: 40px;
            font-weight: 800;
            margin-left: 10px;


        }

        .sidebar ul {
            border-radius: 6px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: black;
            margin-top: 40px;
        }

        .sidebar ul {
            background-color: black;
            padding: 0px;


        }

        img {
            display: none;
            /* width: 89%; */
        }

        .sidebar i {
            display: flex;
            margin-right: 70px;
            margin-bottom: 20px;

        }

        #logout:hover {
            background-color: darkturquoise;
        }

        #arrow {
            height: 20px;
            margin: 0;
            padding: 0;
            font-size: 18px;
        }

        .sidebar ul {
            margin-top: 150px;
        }

        .button {
            font-size: 22px;
            font-weight: 800;
        }




        /* .sidebar {
           ? margin-top: 0;
        } */
    </style>
</head>

<body>
    <ul>

        <li>
            <h1><img src="logo12.jpg" alt="No pic" srcset="">

                <h1>Employee Management</h1>

            </h1>
            <button id='logout'><a href="Home.php">Log-Out</a></button>
        </li>
        <button class="button" id='logout'><i id='arrow' class="fa-sharp fa-solid fa-arrow-left"></i><a href="button.php">Back</a></button>
        <!-- <li></li> -->

    </ul>
    <?php
    require_once("Home.php");

    ?>
</body>

</html>