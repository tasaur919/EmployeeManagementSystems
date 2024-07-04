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
    <link rel="stylesheet" href="style.css">
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
            margin-top: 160px;
            background-color: palegreen;
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
    </style>
</head>

<body>
    <div class="menu">
        <?php
        include 'Addmenu.php'
        ?>
        <!-- </div>
    <div class="backgrountcolor">
         <center>
            <h1><img src="logo.jpg" alt="logo.jpg" srcset=""> R.D.ENGINEERING COLLEGE DUHAI GHAZIABAD</h1>
        </center> -->
    </div>
    <hr>
    <div class="center">

        <form action="#" method="POST">
            <h1>Employee Details</h1>
            <div class="form">
                <input type="text" name="id" class="inputField" placeholder="Search ID" value="<?php if (isset($_POST['search'])) {
                                                                                                    echo $result['emp_id'];
                                                                                                } ?>">
                <input type="text" name="name" class="inputField" placeholder="Employee Name" value="<?php if (isset($_POST['search'])) {
                                                                                                            echo $result['emp_name'];
                                                                                                        } ?>">
                <select name="gender" class="inputField">
                    <option value="No selected">Select Gender</option>

                    <option value="Male" <?php if ($result['emp_gender'] == 'Male') {
                                                echo "selected";
                                            } ?>>Male</option>

                    <option value="Female" <?php if ($result['emp_gender'] == 'Female') {
                                                echo "selected";
                                            } ?>>Female</option>
                    <option value="Other" <?php if ($result['emp_gender'] == 'Other') {
                                                echo "selected";
                                            } ?>>Other</option>
                </select>
                <input type="text" name="email" class="inputField" placeholder="Email Address" value="<?php if (isset($_POST['search'])) {
                                                                                                            echo $result['emp_email'];
                                                                                                        } ?>">

                <select name="department" class="inputField">
                    <option value="">Select Department</option>

                    <option value="IT" <?php if ($result['emp_dept'] == 'IT')
                                            echo "selected";
                                        ?>>IT</option>
                    <option value="HR" <?php if ($result['emp_dept'] == 'HR') {
                                            echo "selected";
                                        } ?>>HR</option>
                    <option value="Managerdept" <?php if ($result['emp_dept'] == 'Manager Dept') {
                                                    echo "selected";
                                                } ?>>Manager Dept</option>
                    <option value="Facultydept" <?php if ($result['emp_dept'] == 'Faculty Dept') {
                                                    echo "selected";
                                                } ?>>
                        Faculty Dept</option>
                    <option value="Bussiness Dept" <?php if ($result['emp_dept'] == 'Bussiness Dept') {
                                                        echo "selected";
                                                    } ?>>Bussiness Dept</option>
                </select>
                <!-- under closing tag than write code under the closing tag -->
                <textarea name="address" class="textField" id="textArea" cols="30" rows="3" placeholder="Address"><?php if (isset($_POST['search'])) {
                                                                                                                        echo $result['emp_add'];
                                                                                                                    } ?></textarea>

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
    $department  = $_POST['department'];
    $address     = $_POST['address'];

    $query = "INSERT INTO form1 (emp_name,emp_gender,emp_email,emp_dept,emp_add) VALUES('$name','$gender','$email','$department','$address')";
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
    $department  = $_POST['department'];
    $address     = $_POST['address'];
    $query = "UPDATE form1 SET emp_name='$name',emp_gender='$gender',emp_email='$email',emp_dept='$department',emp_add='$address' WHERE emp_id='$id' ";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script> alert('Record is Updated')  </script>";
    } else {
        echo "<script> alert('Failed to updated')  </script>";
    }
}
?>