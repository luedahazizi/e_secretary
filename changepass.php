<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUDPASS</title>
    <h1>CHANGE YOUR PASSWORD </h1>
</head>

<body>
<?php include_once('config.php');
if (isset($_POST['Submit'])) {

    $email = $_POST['useremail'];
    $opwd = $_POST['opwd'];
    $npwd = $_POST['npwd'];
    $cpwd = $_POST['cpwd'];

    $query = mysqli_query($conn, "SELECT Email,Username,Password FROM user WHERE Email = '$email'   AND Password = '$opwd'");
    $num = mysqli_fetch_array($query);

    if ($num > 0) {
        $connect = mysqli_query($conn, "UPDATE user SET Password = '$npwd' WHERE Email = '$email'");
        echo "Password change successfully";
    } else {
        echo  "Password does not match";
    }
}
?>
<h2> <?php echo  $_SESSION['msg1']; ?><?php $_SESSION['msg1'] = ""; ?></h2>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">
    <table align="center">
        <tr height="60">
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
            background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg");
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