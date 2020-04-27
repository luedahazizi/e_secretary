<?php
require_once('config.php'); 
?>
<?php
 if(isset($_POST)){
    $emer        = $_POST['emer'];
    $mbiemer     = $_POST['mbiemer'];
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $email       = $_POST['email'];
    $telefon     = $_POST['telefon'];
    $arsimi  = $_POST['arsimi'];
    $status       = $_POST['status'];
    $profesioni    = $_POST['profesioni'];

    $sql1 = "INSERT INTO user (emer, mbiemer, username, password, email,telefon)
VALUES ('$_POST[emer]' ,'$_POST[mbiemer]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[telefon]')";
 $sql2 = "INSERT INTO prindi (arsimi,status,profesioni,PrindID)
 VALUES (  '$_POST[arsimi]', '$_POST[status]', '$_POST[profesioni]',last_insert_id())";



if ($conn->query($sql1) === TRUE ) {
echo "New record created successfully";
} else {
echo "Error: " . $sql1 . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE  ) {
    echo "New record created successfully";
    } else  {
    echo "Error: " . $sql2 ."<br>" . $conn->error;
    }

$conn->close();

}else{
    echo 'No data';
}
?>