<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}


?>
<!DOCTYPE html>

<html>

<head>
    <title>CRUDPASS</title>
    <h1>CHANGE YOUR PASSWORD </h1>
</head>

<body>
    <?php include_once('connection.php');
    if (isset($_POST['Submit'])) {

        $email = $_POST['useremail'];
        $opwd = $_POST['opwd'];
        $npwd = $_POST['npwd'];
        $cpwd = $_POST['cpwd'];


        $query = mysqli_query($connect, "SELECT Email,Username,Password FROM user WHERE Email = '$email'   AND Password = '$opwd'");
        $num = mysqli_fetch_array($query);

        if ($num > 0) {
            $connect = mysqli_query($connect, "UPDATE user SET Password = '$npwd' WHERE Email = '$email'");
            $_SESSION['msg1'] = "Password change successfully";
        } else {
            $_SESSION['msg1'] = "Password does not match";
        }
    }
    ?>
    <h2> <?php echo $_SESSION['msg1']; ?><?php $_SESSION['msg1'] = ""; ?> </h2>
    <form name="chngpwd" action="" method="post" onSubmit="return valid();">
        <table align="center">
            <tr height=" 60">
                <td>EMAIL :</td>
                <td><input type="text" name="useremail" id="useremail"></td>

            </tr>
            <tr height="60">
                <td>Old Password :</td>
                <td><input type="password" name="opwd" id="opwd"></td>
            </tr>
            <tr height="60">
                <td>New Password :</td>
                <td><input type="password" name="npwd" id="npwd"></td>
            </tr>
            <tr height="60">
                <td>Confirm Password :</td>
                <td><input type="password" name="cpwd" id="cpwd"></td>

            </tr>
            <tr>
                <td><input type="submit" name="Submit" value="Change Password" /></td>

            </tr>
        </table>
        <style>
            body {
                background-image: url("login1.png");
                background-repeat: no-repeat;
                background-size: 130%;
                background-position: center;
            }

            h1 {
                color: green;
                text-align: center;
                font-size: 30px;
                font-family: 'Candal';

            }

            h2 {
                color: #3c763d;
                background: #dff0d8;
                width: 50%;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
        </style>

    </form>
</body>

</html>