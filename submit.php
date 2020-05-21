<?php
require_once('config.php'); 
?>

<?php
//generate automatic username
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
    //$password    = 'student';
    $email       = $_POST['email'];
    $prind       = $_POST['prind'];

    $telefon     = $_POST['telefon'];
    $datelindje  = $_POST['datelindje'];
    $viti        = $_POST['viti'];
    $paraleli    = $_POST['paraleli'];
    $id = "SELECT  userID 
    FROM user join prindi on userID=PrindID
    WHERE Emer='$prind'";
             $resultf = mysqli_query($conn, $id);
             $row = mysqli_fetch_array($resultf);

   
    $sql1 = "INSERT INTO user (emer, mbiemer, username, password, email,telefon,RolID)
VALUES ('$_POST[emer]' ,'$_POST[mbiemer]', '$_POST[username_val]', '12345', '$_POST[email]', '$_POST[telefon]',3)";
 $sql2 = "INSERT INTO nxenes (datelindje,viti,paraleli,NxenesID,PrindID)
 VALUES (  '$_POST[datelindje]', '$_POST[viti]', '$_POST[paraleli]',last_insert_id(),'$row[userID]' )";
 
 
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
   
 echo "Succes";

 }


if ($conn->query($sql1) === TRUE ) {
    
echo "New record created successfully";
} else {
//echo "Error ";
}
if ($conn->query($sql2) === TRUE  ) {
    
    echo "New record created successfully";
    } else  {
    echo ("Error description: " . mysqli_error($conn)); ;
    }

$conn->close();

}else{
    echo 'No data';
}

?>