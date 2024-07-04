<?php
session_start();
// require_once('Connection.php');
$servername = "localhost";
$username   = "root";
$passward   = "";
$dbname     = "Employee";

$conn = mysqli_connect($servername, $username, $passward, $dbname);
if ($conn) {
    echo 'conn vreated...';
}
// if ($conn) {
if (isset($_POST['login1'])) {
    if (empty($_POST['email1']) || empty($_POST['password'])) { //message is empty
        header("location: ../login.php?empty");
        exit();
    } else {
        $userId = mysqli_real_escape_string($conn, $_POST['email1']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        echo $userId . 'uid';
        echo $password . 'ped..';

        $p = '';
        $savedPassword = '';
        $query = "select * from login where username ='" . $userId . "' or email='" . $userId . "' ";
        // $query = "select * from login where email ='tasaur919@gmail.com'";
        echo $query;
        // $a = mysqli_real_query($conn, $query);
        // echo $a;
        //$result = mysqli_query($conn, $query);
        $result = $conn->query($query);
        echo $result->num_rows;
        //echo ($result . 'result');
        while ($row = $result->fetch_assoc()) {
            // echo 'This is row';
            $savedPassword =  $row['password'];
        }
        echo ($savedPassword . 'password....');
        $flag = strcmp($savedPassword, $password);
        // echo $flag . 'flag....';
        if ($flag === 0) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['LastName'] = $row['LastName'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            // $_SESSION['RePassword'] = $row['RePassword'];
            header("location: ../account.php?well");
            // require_once("Addmenu.php");
        } else {
            header("location: ../login.php?Invalid");
        }
        // Error generate $result
        //echo $result;

        // if ($row = mysqli_fetch_assoc($result)) {
        //     $hashpass = password_verify($password, $row['password']);
        //     echo $hashpass;
        //     //if($hashpass==false) or
        //     if (!$hashpass) {
        //         header("location: ../login.php?P_Invalid");
        //         exit();
        //     }
        //     // below part is not working -> else if()
        //     //elseif($hashpass==true)
        //     else if ($hashpass) {
        //         $_SESSION['user_id'] = $row['user_id'];
        //         $_SESSION['FirstName'] = $row['FirstName'];
        //         $_SESSION['LastName'] = $row['LastName'];
        //         $_SESSION['email'] = $row['email'];
        //         $_SESSION['username'] = $row['username'];
        //         $_SESSION['password'] = $row['password'];
        //         // $_SESSION['RePassword'] = $row['RePassword'];
        //         header("location: account.php?Well");
        //         exit();
        //     } else {
        //         header("location: ../login.php?Invalid");
        //         exit();
        //     }
        // } else {
        //     header("location: ../login.php");
        //     exit();
        // }
    }
}
