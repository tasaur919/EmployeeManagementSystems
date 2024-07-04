<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Record from database</title>
    <style>
        body {
            background-image: url(contaclogo123.jpg);
            background-repeat: no-repeat;
            background-size: 100%, 100vh;
        }



        .main {
            background-color: #fff;
            color: #000;
            max-width: 89vw;
            max-height: 85vh;
            margin-left: 100px;
            /* margin-top: 10px; */
            /* overflow: auto; */
        }

        #search {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* margin-top: 5px; */
            height: 12vh;
            overflow: hidden;
            padding: 10px;
            /* margin-left: 70px; */
            margin-right: 600px;
        }

        input {
            height: 50px;
            width: 200px;
            border-radius: 8px;
            /* margin-left:px; */
            padding-left: 10px;
            cursor: pointer;
        }

        .data {
            margin-left: 10px;

            overflow: scroll;
            max-height: 85vh;
            /* margin-left: 200px; */
        }

        .btn {
            width: 60px;
        }

        .btn:hover {
            background-color: gray;
        }

        table {
            border-collapse: collapse;
            border: 1.6px solid black;
            margin-bottom: 200px;
        }

        table td,
        th {
            padding: 5px;
        }

        th {
            background-color: gray;
            font-size: 22px;
            font-weight: 900;
            color: #fff;
        }

        /* #main {
            display: none;
        } */
    </style>
</head>

<body>
    <div class="menu">
        <?php
        include 'Addmenu.php'
        ?>
    </div>

    <div class="main">
        <div id="search">
            <form method="post" action="searchData.php">
                <input type="text" name="search" placeholder="Enter Name or Charator">
                <input type="submit" class="btn" name="btn" value="Search">
            </form>
        </div>
        <div class="data">
            <?php
            // Establish database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Employee";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if (isset($_POST['btn'])) {
                // Process search query
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $search = $_POST['search'];

                    // SQL query
                    $sql = "SELECT * FROM form1 WHERE emp_name like '%$search%'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {


                        // echo "<table>";
                        // echo "<tr><th>Column 1</th><th>Column 2</th><th>Column 3</th></tr>";
                        // while ($row = $result->fetch_assoc()) {
                        //     echo "<tr><td>".$row["column1"]."</td><td>".$row["column2"]."</td><td>".$row["column3"]."</td></tr>";
                        // }
                        // echo "</table>";


                        // Output data of each row
                        echo "<table border='1'>";
                        echo "<tr><th>Employee ID</th><th>Employee Name</th><th>Employee Gender</th><th>Official Email</th><th>Personal Email</th><th>Adhaar Number</th><th>PAN Number</th><th>Mobile Number</th><th>Department Name</th><th>Address</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo  "<br><tr>" . "<td>" . $row["emp_id"] . "</td><td>" . $row["emp_name"] . "</td><td>" . $row["emp_gender"] . "</td><td>" . $row["emp_email"] . "</td><td>" . $row["Per_email"] . "</td><td>" . $row["Adhaar_number"] . "</td><td>" . $row["PAN_number"] . "</td><td>" . $row["Mobile_number"] . "</td><td>" . $row["emp_dept"] . "</td><td>" . $row["emp_add"] . "</td></tr>";
                            // Add more fields as needed
                        }
                        echo "</table>";
                    } else {
                        echo "No Data Found";
                    }
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>