<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons</title>
    <style>
        .button-container {
            text-align: center;
            margin-top: 0px;
        }

        /* .button-container {
            margin-top: 900px;
        } */

        .btn {
            display: inline-block;
            padding: 5px 0px;
            margin: 10px 0px 50px 0px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: 2px solid #007bff;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        body {
            background-image: url(buttonlogo.jpg);
            background-repeat: no-repeat;
            background-size: 100%, 100vh;
            /* overflow: hidden; */
        }

        .btn1 {
            background-color: transparent;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 40%;

            margin: 0 850px;
            border-radius: 10px;
            /* padding-bottom: 400px; */
        }




        .btn1 button {
            height: 70px;
            width: 200px;
            margin-top: 7px;
        }

        body {
            overflow: hidden;
            max-width: 100vw;
            max-height: 100vh;
        }



        /* .sidebar i {
            display: none;
            margin-top: 30px;
            padding-top: 30px;
        } */
    </style>
</head>

<body>
    <div class="body1">
        <?php
        require_once("Addmenu.php");
        ?>
        <div class="button-container btn1">
            <!-- <center>
                <h1 style="color: black;">Choice Is Your</h1>
            </center> -->
            <hr>
            <button class="btn"><a href="EmployeeDetails.php">Add Employee</a></button>
            <button class="btn"><a href="showTableInfo.php">Show Employees Data</a></button>
            <button class="btn"><a href="showAdmin.php">Show all Admin User</a></button>
            <button class="btn"><a href="searchData.php">Search Eployee</a></button>
            <!-- <button class="btn"><a href=""></a></button> -->
        </div>
        <?php
        require_once("Home.php");
        ?>
    </div>
</body>

</html>