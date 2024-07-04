<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manageEmp.css">
</head>
<style>
    .menu {
        background-color: #006699;
        width: 100%;
        height: 80px;
        border: 1px solid ghostwhite;
        /* position: sticky; */
        margin-top: 0;


    }

    .center {
        padding-top: 0px;
        margin-top: 160px;
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

    .btn {
        position: absolute;
        display: flex;
        align-items: center;
        height: 20vh;
        justify-content: center;
    }

    body .main {
        margin-top: 90px;
        width: 500px;
    }

    input {
        width: 200px;
        height: 70px;
        font-size: 24px;
    }
</style>

<body>
    <div>
        <div class="menu">
            <?php
            include 'Addmenu.php'
            ?>
        </div>
        <div class="backgrountcolor">
            <center>
                <h1><img src="logo.jpg" alt="logo.jpg" srcset=""> R.D.ENGINEERING COLLEGE DUHAI GHAZIABAD</h1>
            </center>
        </div>
        <hr>
        <div class="main">
            <div class="btn">
                <form action="showTableInfo.php">
                    <input type="submit" value="ManageEmployee" src="showTableInfo.php" style="background-color:gray;">
                </form>
                <form action="form1.php">
                    <input type="submit" value="Add Employee" src="form1.php" style="background-color: green;">
                </form>
            </div>
        </div>
    </div>
</body>

</html>