<?php
session_start();
require_once('button.php');
if (isset($_GET['well'])) {
    if ($_SESSION['user_id']) {
        echo '<div>You have Successfully login</div>';
        // header("location:Addmenu.php");
    } else {
    }
} else {
    header("location:login.php");
}
