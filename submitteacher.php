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
    $datelindje  = $_POST['datelindje'];
    $foto        = $_POST['foto'];
    

    $sql1 = "INSERT INTO user (emer, mbiemer, username, password, email,telefon)
VALUES ('$_POST[emer]' ,'$_POST[mbiemer]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[telefon]')";
 $sql2 = "INSERT INTO mesues (datelindje,foto,MesuesID)
 VALUES (  '$_POST[datelindje]', '$_POST[foto]',last_insert_id())";



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