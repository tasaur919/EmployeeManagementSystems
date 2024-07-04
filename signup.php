<?php
require_once('Connection.php');


if (isset($_POST['save'])) {
    if (
        empty($_POST['name']) || empty($_POST['lname']) || empty($_POST['email']) ||  empty($_POST['username']) ||
        empty($_POST['password'])
    ) {
        header("location: ../signIn.php?empty");
    } else {
        $fname = mysqli_real_escape_string($conn, $_POST['name']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {

            header("location: ../signIn.php?invalid");
        } else {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../signIn.php?email1");
            } else {
                // check email is exist or not
                // $query = "select * from login where email='" . $email . "'";
                $query = "select * from login where username='" . $username . "'";
                $result = mysqli_query($conn, $query);
                if (mysqli_fetch_assoc($result)) {
                    header("location: ../signIn.php?user");
                    exit();
                } else {

                    $query = "select * from login where email='" . $email . "'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_fetch_assoc($result)) {
                        header("location: ../signIn.php?email");
                        exit();
                    } else {
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                        $query = "insert into login(FirstName,LastName,email,username,password) values('$fname','$lname','$email','$username','$password')";
                        $result = mysqli_query($conn, $query);
                        header("location: ../signIn.php?pass");
                        exit();
                    }
                }
            }
        }
    }
} else {
    header("location:../Addmenu.php");
}
