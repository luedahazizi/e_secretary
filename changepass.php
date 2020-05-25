
<!DOCTYPE html>
<html>

<head>
    <title>CRUDPASS</title>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="subject.css">
</head>

<body>
<?php include_once('config.php');
include_once('homepage.php');
if (isset($_POST['Submit'])) {

    $email = $_POST['useremail'];
    $opwd =md5( $_POST['opwd']);
    $npwd = md5($_POST['npwd']);
    $cpwd =md5( $_POST['cpwd']);

    $query = mysqli_query($conn, "SELECT Email,Username,Password FROM user WHERE Email = '$email'   AND Password = '$opwd'");
    
    $num = mysqli_fetch_array($query);

    if ($num > 0) {
        $connect = mysqli_query($conn, "UPDATE user SET Password = '$npwd' WHERE Email = '$email'");
        echo "<div class='success'>Password change succesfully</div>";
            } else {
                echo "<div class='error'>Password does not match</div>";
            }
        }

?>


<h1>CHANGE YOUR PASSWORD </h1>
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
            <td><input type="submit" name="Submit" id = "register" value="Change Password" /></td>

        </tr>
    </table>
    <style>
        body {
           
            background-repeat: no-repeat;
            background-size: 130%;
            background-position: center;
        }

        h1 {
            color: black;
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