<?php
include("connection.php");
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $role = "select r. RoliEmer ,u.emer,u.mbiemer ,u.email  ,u.telefon
    from user u join roli r on u.RolID=r.RoliID 
    where ( username='$user' or email='$user') and password='$pass'";



    $result = mysqli_query($connect, $role);



    if (mysqli_num_rows($result) == 1) {

        session_start();
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);

        if (isset($_POST['submitBtn'])) {
            $_SESSION['telefon'] = $row['telefon'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['emer'] = $row['emer'];
            $_SESSION['mbiemer'] = $row['mbiemer'];
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = $user;
            $_SESSION["role"] =  $row['RoliEmer'];
            if ($row['RoliEmer'] == "admin") {
                header("Location:admin.php");
            } else  if ($row['RoliEmer'] == "mesues") {
                header("location:mesues.php");
            } else if ($row['RoliEmer'] == "nxenes") {
                header("location:nxenes.php");
            } else if ($row['RoliEmer'] == "prind") {
                $emerPrindi = $_SESSION['emer'];
                $mbiemerPrindi = $_SESSION['mbiemer'];

                $gjejFemijeQuery = "SELECT nx. * from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer ='$emerPrindi' and p.Mbiemer = '$mbiemerPrindi' ";

                $resultf = mysqli_query($connect, $gjejFemijeQuery);
                $femije = mysqli_fetch_array($resultf, MYSQLI_BOTH);
                $_SESSION['emerFemije'] = $femije['emer'];
                if (mysqli_num_rows($resultf) == 1) {
                    header("location:prind.php");
                } else
                    header("location:femije.php");
            } else {
                header("location:form.html");
            }
        } else {
            echo 1;
        }
    } else {
        echo "<div id='error_notif'>
        <strong> Wrong credentials </strong>
        </div>";
    }
} else {
    exit('Please fill the login form!');
}
