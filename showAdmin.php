<?php
require_once('Connection.php');
$query = "select * from login";
$result = mysqli_query($conn, $query)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>show data from database in php</title>
    <style>
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
            margin-top: 10px;
            background-color: wheat;
        }

        img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            /* padding-top: 0 20px; */
        }

        h1 {
            color: red;
            font-size: 40px;
            font-weight: 900;


        }

        .backgrountcolor {
            background-color: yellow;
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 150px;
        }

        /* a {
            color: blue;
            text-decoration: none;
            height: 20px;
            width: 20px;
            border: 1px solid black;
            border-radius: 6px;

        } */

        .btn {
            color: blue;
            height: 20px;
            width: 30px;
            border: 1px solid black;
            border-radius: 6px;
        }

        .btn-danger {
            background-color: red;
            color: black;
        }

        .btn-primary {
            background-color: green;
            color: white;
        }

        .container {
            /* border: 1px solid red; */
            border-radius: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container h2 {
            text-align: center;
            /* color:gray; */
            /* background-color: gray; */
            color: black;
            font-size: 24px;
            font-weight: 900;
        }

        table {
            /* column-rule-style: solid; */
            border-collapse: collapse;
            margin-left: 80px;
            border: 2px solid black;
            flex-wrap: wrap;
        }

        .bg-dark {
            background-color: burlywood;
            color: black;
            font-size: 15px;
            font-weight: 900;
        }

        table tr td {
            /* margin: 10px; */
            padding: 5px;
        }

        th {
            background-color: paleturquoise;
            height: 40px;
            width: 110px;
            font-size: 18px;
            font-weight: 900;

        }

        .row {
            margin-left: 10px;
        }

        td a .btn {
            height: 20px;
            width: 50px;
        }

        .container {
            overflow: auto;
            max-width: 87vw;
            max-height: 88vh;
            background-color: #fff;
        }

        body {
            background-image: url(contaclogo123.jpg);
        }
    </style>
</head>

<body class="bg-dark">

    <div class="menu">
        <?php
        include 'Addmenu.php'
        ?>
    </div>
    <!-- <div class="backgrountcolor">
        <center>
            <h1><img src="logo.jpg" alt="logo.jpg" srcset=""> R.D.ENGINEERING COLLEGE DUHAI GHAZIABAD</h1>
        </center>
    </div> -->
    <hr>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card mt-4">
                    <h2 class="display-6 text-center">All Employee Data </h2>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-border text-center" border="">
                        <tr class="bg-dark">

                            <th>Admin ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>



                        </tr>
                        <!-- show data/table from database -->
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['user_id'] ?></td>
                                <td><?php echo $row['FirstName'] ?></td>
                                <td><?php echo $row['LastName'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><a href="#" class="btn btn-primary">edit</a></td>
                                <td><a href="#" class="btn btn-danger">delete</a></td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>