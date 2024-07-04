<!-- this code for connect to the database connection -->
<?php
include("Connection.php");
?>

<!-- //this code for Search -->
<?php
if (isset($_POST['search'])) {
    $search  = $_POST['id'];
    $query = "SELECT * FROM form1 where emp_id='$search' ";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
    // $name = $result['emp_name'];
    // echo $name;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Developer</title>
    <link rel="stylesheet" href="#">
    <style>
        body {
            background-image: url(Employlogo.jpg);
            background-repeat: no-repeat;
            background-size: 100%, 100vh;
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
            margin-top: 20px;
            background-color: transparent;
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
            margin-left: 20px;


        }


        .backgrountcolor {
            background-color: yellow;
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 150px;
            cursor: pointer;
        }

        label {
            font-size: 18px;
            font-weight: 900;
            margin-left: 90px;
            color: #fff;
        }

        input {
            margin-left: 200px;
            opacity: 0.6;
        }

        .center {
            /* position: absolute; */
            /* background-color: palegreen; */
            width: 100%;
            height: 100vh;
            border: 1px solid black;


            /* margin-top: 60px;  */
        }

        .center h1 {
            margin-left: 140px;
        }



        select {
            width: 200px;
            height: 27px;
            border-radius: 4px;
            padding-left: 12px 2px;

        }

        .inputField {
            width: 200px;
            height: 27px;
            border-radius: 4px;
            padding-left: 12px;
            margin-left: 20px;
            cursor: pointer;

        }

        .textField {
            width: 200px;
            height: 27px;
            border-radius: 4px;
            padding-left: 12px 2px;
            cursor: pointer;

        }

        .education h1,
        .center h1 {
            color: wheat;
            font-size: 27px;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .textField {
            height: 30px;
            width: 25%;
            border-radius: 6px;
            cursor: pointer;

        }

        .education h2 {
            margin-left: 140px;
            color: red;
            cursor: pointer;
        }



        table {
            margin-left: 90px;
            border-collapse: collapse;
            border: 2px solid black;

        }

        .education input {
            height: 22px;
            width: 120px;
            border-radius: 4px;
            cursor: pointer;

        }

        input {
            height: 27px;
            width: 160px;
            border-radius: 4px;
            margin: 4px;
            cursor: pointer;
        }

        .btn {
            height: 40px;
            width: 190px;
            border-radius: 6px;
            margin: 20px;
            font-size: 18px;
            font-weight: 900;
            cursor: pointer;
        }

        .center .btn {
            height: 40px;
            width: 12%;
            border-radius: 6px;
            cursor: pointer;
        }

        .education input {
            height: 30px;
            width: 25%;
            border-radius: 6px;
            cursor: pointer;
        }

        .center input {
            height: 30px;
            width: 25%;
            border-radius: 6px;
            cursor: pointer;
        }

        textarea {
            opacity: 0.6;
        }

        .center select {
            height: 30px;
            width: 25%;
            border-radius: 6px;
        }

        span {
            font-size: 18px;
            font-weight: 900;
            margin-left: 90px;
            color: #fff;
        }

        #th {
            height: 18px;
            width: 18px;
            cursor: pointer;
        }

        .center {
            overflow: scroll;
            max-width: 84vw;
            max-height: 85vh;

        }

        .btn {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="menu">
        <?php
        include 'Addmenu.php'
        ?>
    </div><!--
    <div class="backgrountcolor">
        <center>
            <h1><img src="logo.jpg" alt="logo.jpg" srcset=""> R.D.ENGINEERING COLLEGE DUHAI GHAZIABAD</h1>
        </center> -->
    <!-- </div> -->
    <hr>
    <div class="center">

        <form action="#" method="POST">
            <center>
                <h1>Employee Details</h1>
            </center>
            <hr>
            <div class="form">
                &nbsp;&nbsp;&nbsp;<label>ID Search</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" class="inputField" placeholder="First search any id then Perform any Operation" value="<?php if (isset($_POST['search'])) {
                                                                                                                                                                                                                            echo $result['emp_id'];
                                                                                                                                                                                                                        } ?>">
                <label>Name* :</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" class="inputField" placeholder="Employee Name" value="<?php if (isset($_POST['search'])) {
                                                                                                                                                                                                            echo $result['emp_name'];
                                                                                                                                                                                                        } ?>">
                <br><label>Gender* :</label>
                <span> Male</span><input type="radio" value="Male" name="gender" id="th" class="inputField">
                <span>Female</span><input type="radio" value="Female" name="gender" id="th" class="inputField">
                <span>Other</span><input type="radio" value="Other" name="gender" id="th" class="inputField">

                <!-- <option value="No selected">Select Gender</option>

                    <option value="Male" <php if ($result['emp_gender'] == 'Male') {
                                                echo "selected";
                                            } ?>>Male</option>

                    <option value="Female" <php if ($result['emp_gender'] == 'Female') {
                                                echo "selected";
                                            } ?>>Female</option>
                    <option value="Other" <php if ($result['emp_gender'] == 'Other') {
                                                echo "selected";
                                            } ?>>Other</option>
                </select> -->
                <br><label>Email*:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" class="inputField" placeholder=" Official Email Address" value="<?php if (isset($_POST['search'])) {
                                                                                                                                                                                                                                                    echo $result['emp_email'];
                                                                                                                                                                                                                                                } ?>">
                <!-- 4  -->
                <label>Personal Email:</label>
                <input type="text" name="Pemail" class="inputField" placeholder="Persional Email Address" value="<?php if (isset($_POST['search'])) {
                                                                                                                        echo $result['Per_email'];
                                                                                                                    } ?>">



                <br><label>Adhaar Number*:</label>
                &nbsp;<input type="number" name="Anumber" class="inputField" placeholder="Enter your Adhaar Nuber" value="<?php if (isset($_POST['search'])) {
                                                                                                                                echo $result['Adhaar_number'];
                                                                                                                            } ?>">



                <label>PAN Number :</label>
                &nbsp;&nbsp;&nbsp;<input type="text" name="Pnumber" class="inputField" placeholder="Enter your PAN Card Nuber" value="<?php if (isset($_POST['search'])) {
                                                                                                                                            echo $result['PAN_number'];
                                                                                                                                        } ?>">

                <label>Mobile Number*</label>
                &nbsp;&nbsp;&nbsp;<input type="number" name="Mnumber" class="inputField" placeholder="Enter your Adhaar Nuber" value="<?php if (isset($_POST['search'])) {
                                                                                                                                            echo $result['Mobile_number'];
                                                                                                                                        } ?>">


                <br><label>DepartmentName*</label>
                <input type="text" name="department" class="inputField" placeholder="Enter your Department Name" value="<?php if (isset($_POST['search'])) {
                                                                                                                            echo $result['emp_dept'];
                                                                                                                        } ?>">





                <!-- <label>Department Name*:</label>
                <select name="department" class="inputField">
                    <option value="">Select Department</option>

                    <option value="IT" <php if ($result['emp_dept'] == 'IT')
                                            echo "selected";
                                        ?>>IT</option>
                    <option value="HR" <php if ($result['emp_dept'] == 'HR') {
                                            echo "selected";
                                        } ?>>HR</option>
                    <option value="Managerdept" <php if ($result['emp_dept'] == 'Manager Dept') {
                                                    echo "selected";
                                                } ?>>Manager Dept</option>
                    <option value="Facultydept" <php if ($result['emp_dept'] == 'Faculty Dept') {
                                                    echo "selected";
                                                } ?>>
                        Faculty Dept</option>
                    <option value="Bussiness Dept" <php if ($result['emp_dept'] == 'Bussiness Dept') {
                                                        echo "selected";
                                                    } ?>>Bussiness Dept</option>
                </select> -->
                <!-- under closing tag than write code under the closing tag -->
                <label>Address* :</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="address" class="textField" id="textArea" cols="60" rows="5" placeholder="Address"><?php if (isset($_POST['search'])) {
                                                                                                                                                                                                                        echo $result['emp_add'];
                                                                                                                                                                                                                    } ?></textarea>







                <!-- Educational Details -->
                <hr>
                <div class="education">

                    <center>
                        <h1>Educational Details</h1>
                    </center>
                    <br><br><label>Class:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="classes" class="inputField" placeholder="Enter your class name" value="<?php if (isset($_POST['search'])) {
                                                                                                                                                                                                                                echo $result['Class_name'];
                                                                                                                                                                                                                            } ?>">


                    <label>Board Name:</label>
                    <input type="text" name="board" class="inputField" placeholder="Enter Board Name" value="<?php if (isset($_POST['search'])) {
                                                                                                                    echo $result['Board_name'];
                                                                                                                } ?>">


                    <label>Roll Number:</label>
                    &nbsp;&nbsp;<input type="text" name="roll" class="inputField" placeholder="Enter Roll No." value="<?php if (isset($_POST['search'])) {
                                                                                                                            echo $result['Roll_number'];
                                                                                                                        } ?>">

                    <label>Passing Year:</label>
                    <input type="date" name="year" class="inputField" placeholder="Enter Passing Year" value="<?php if (isset($_POST['search'])) {
                                                                                                                    echo $result['Passing_year'];
                                                                                                                } ?>">

                    <label>Obtain Marks:</label>
                    <input type="text" name="obtain" class="inputField" placeholder="Enter Obtain Marks" value="<?php if (isset($_POST['search'])) {
                                                                                                                    echo $result['Obtain_marks'];
                                                                                                                } ?>">

                    <label>Total Marks:</label>
                    <input type="text" name="total" class="inputField" placeholder="Enter Total Marks" value="<?php if (isset($_POST['search'])) {
                                                                                                                    echo $result['Total_marks'];
                                                                                                                } ?>">

                    <label>Percentage:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="percent" class="inputField" placeholder="Enter Your % Marks " value="<?php if (isset($_POST['search'])) {
                                                                                                                                                            echo $result['Percent_Of_marks'];
                                                                                                                                                        } ?>">





                    <br>
                    <hr>
                </div>



                <input type="submit" name="search" value="Search" class="btn">
                <input type="submit" name="save" value="Save" class="btn" style="background-color: green;">
                <input type="submit" name="update" value="Update" class="btn" style="background-color: yellow;">
                <input type="submit" name="delete" value="Delete" class="btn" style="background-color: red;" onclick="return checkDelete()">
                <input type="reset" value="Clear" name="clear" class="btn" style="background-color: blue;">
            </div>
        </form>
    </div>

</body>

</html>

<script>
    function checkDelete() {
        return confirm('Are you sure to Delete this record?')
    }
</script>

<!-- // this code for save data into table(database) -->
<?php
if (isset($_POST['save'])) {

    $name        = $_POST['name'];
    $gender      = $_POST['gender'];
    $email       = $_POST['email'];
    $Pemail      = $_POST['Pemail'];
    $Anumber      = $_POST['Anumber'];
    $Pnumber      = $_POST['Pnumber'];
    $Mnumber      = $_POST['Mnumber'];
    $department  = $_POST['department'];
    $address     = $_POST['address'];

    $class = $_POST['classes'];
    $board = $_POST['board'];
    $roll = $_POST['roll'];
    $year = $_POST['year'];
    $obtain = $_POST['obtain'];
    $total = $_POST['total'];
    $percent = $_POST['percent'];

    $query = "INSERT INTO form1 (emp_name,emp_gender,emp_email,Per_email,Adhaar_number,PAN_number,Mobile_number,emp_dept,emp_add,Class_name,Board_name,Roll_number,Passing_year,Obtain_marks,Total_marks,Percent_Of_marks) VALUES('$name','$gender','$email','$Pemail','$Anumber','$Pnumber','$Mnumber','$department','$address','$class','$board','$roll','$year','$obtain','$total','$percent')";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script> alert('data inserted into table/database')  </script>";
    } else {
        echo "<script> alert('Failed to insert data')  </script>";
    }
}
?>

<!-- this is for Delete row(searchable data delete) -->
<?php
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM form1 where emp_id='$id'";
    $data = mysqli_query($conn, $query);

    // if ($data) {
    //     echo "info is deleted";
    // }
}
?>


<!-- searchable data update -->
<?php
if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $name        = $_POST['name'];
    $gender      = $_POST['gender'];
    $email       = $_POST['email'];
    $Pemail      = $_POST['Pemail'];
    $Anumber      = $_POST['Anumber'];
    $Pnumber      = $_POST['Pnumber'];
    $Mnumber      = $_POST['Mnumber'];
    $department  = $_POST['department'];
    $address     = $_POST['address'];

    $class = $_POST['classes'];
    $board = $_POST['board'];
    $roll = $_POST['roll'];
    $year = $_POST['year'];
    $obtain = $_POST['obtain'];
    $total = $_POST['total'];
    $percent = $_POST['percent'];

    $query = "UPDATE form1 SET emp_name='$name',emp_gender='$gender',emp_email='$email',Per_email='$Pemail',Adhaar_number='$Anumber',PAN_number='$Pnumber',Mobile_number='$Mnumber',emp_dept='$department',emp_add='$address',Class_name='$class',Board_name='$board',Roll_number='$roll',Passing_year='$year',Obtain_marks='$obtain',Total_marks='$total',Percent_Of_marks='$percent' WHERE emp_id='$id' ";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script> alert('Record is Updated')  </script>";
    } else {
        echo "<script> alert('Failed to updated')  </script>";
    }
}
?>