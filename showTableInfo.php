<?php
require_once('Connection.php');
$query = "select * from form1";
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
            margin-top: 90px;
            background-color: wheat;
        }

        img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            padding-top: 0 20px;
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
            height: 40px;
            width: 80px;
            border: 1px solid black;
            border-radius: 4px;
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
            background-color: #fff;
        }

        .container h2 {
            text-align: center;
            color: blue;
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
            max-width: 100vw;
            max-height: 100vh;
        }

        body {
            max-width: 100vw;
            max-height: 100vh;
            overflow: hidden;
            background-image: url(contaclogo123.jpg);
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
            margin-left: 50px;
        }

        td a .btn {
            height: 40px;
            width: 80px;
            padding: 15px 20px;

        }

        .row {
            overflow: auto;
            max-width: 85vw;
            max-height: 85vh;
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
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Gender</th>
                            <th>Employee Email</th>
                            <th>Personal Email</th>
                            <th>Adhaar Number</th>
                            <th>PAN Number</th>
                            <th>MObile Number</th>

                            <th>Emp Department</th>
                            <th>Emp address</th>

                            <th>Class Name</th>
                            <th>Board Name</th>
                            <th>Roll Number</th>
                            <th>Passing Year</th>
                            <th>Obtain Marks</th>
                            <th>Total Marks</th>
                            <th>Percentage %</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <!-- show data/table from database -->
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['emp_id'] ?></td>
                                <td><?php echo $row['emp_name'] ?></td>
                                <td><?php echo $row['emp_gender'] ?></td>
                                <td><?php echo $row['emp_email'] ?></td>
                                <td><?php echo $row['Per_email'] ?></td>
                                <td><?php echo $row['Adhaar_number'] ?></td>
                                <td><?php echo $row['PAN_number'] ?></td>
                                <td><?php echo $row['Mobile_number'] ?></td>
                                <td><?php echo $row['emp_dept'] ?></td>
                                <td><?php echo $row['emp_add'] ?></td>

                                <td><?php echo $row['Class_name'] ?></td>
                                <td><?php echo $row['Board_name'] ?></td>
                                <td><?php echo $row['Roll_number'] ?></td>
                                <td><?php echo $row['Passing_year'] ?></td>
                                <td><?php echo $row['Obtain_marks'] ?></td>
                                <td><?php echo $row['Total_marks'] ?></td>
                                <td><?php echo $row['Percent_Of_marks'] ?></td>

                                <td><a href="#" class="btn btn-primary">edit</a></td>
                                <td><a href="" class="btn btn-danger" onclick="return checkDelete()">delete</a></td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkDelete() {
            return alert("Are you sure to Delete the record!")
        }
    </script>

</body>

</html>

<?php


?>