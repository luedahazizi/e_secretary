<?php
require_once('config.php'); 


?>
<?php

if(isset($_POST['get_username']))
{
 $user_name=str_replace(' ', '', $_POST['get_username']);
 random_username($user_name);
 exit();
}

function random_username($user_name)
{
 $new_name = $user_name.mt_rand(0,9);
 check_user_name($new_name,$user_name);
}

function check_user_name($new_name,$user_name)
{
 $select ="select * from users where username='$new_name'";

 {
  echo $new_name;
 }
}
 if(isset($_POST)){
    $emer        = $_POST['emer'];
    $mbiemer     = $_POST['mbiemer'];
    $username    = $_POST['username_val'];
    $email       = $_POST['email'];
    $pass=md5("12345");
    $telefon     = $_POST['telefon'];
    $arsimi  =   $_POST['arsimi'];
    $status       = $_POST['status'];
    $profesioni    = $_POST['profesioni'];

    $sql1 = "INSERT INTO user (emer, mbiemer, username, password, email,telefon,RolID)
VALUES ('$_POST[emer]' ,'$_POST[mbiemer]', '$_POST[username_val]', '$pass', '$_POST[email]', '$_POST[telefon]',4)";
 $sql2 = "INSERT INTO prindi (arsimi,status,profesioni,PrindID)
 VALUES (  '$_POST[arsimi]', '$_POST[status]', '$_POST[profesioni]',last_insert_id())";

//check if the user exist
if (!($conn->query($sql1))) {
    
    echo "This user already exists";
}else{
    //send an welcome message
   $to = $_POST['email'];
$subject = 'Hello from e-secretary';
$message = 'Welcome to e-secretary.Now you are a member and your password is-12345';
$headers = "From: sonjetamimini@gmail.com";
mail($to, $subject, $message, $headers);
  
echo "Registration Successful";

}

if ($conn->query($sql1) === TRUE ) {
//echo "New record created successfully";
} else {
//echo "Error: " . $sql1 . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE  ) {
  //  echo "New record created successfully";
    } else  {
//echo "Error ";
    }

$conn->close();

}else{
    echo 'No data';
}
?>