<?php
include("connection.php");

 if(isset($_POST['username'])&& isset($_POST['password'])) {
     $user = $_POST['username'];
     $pass = $_POST['password'];

 }
 else{
     exit('Please fill both the username and password fields!');
 }

     $role = "select  RoliEmer 
 	       from user u join roli r on u.RolID=r.RoliID 
 	      where ( username='$user' or email='$user') and password='$pass'";

     $result = mysqli_query($connect, $role);

    if(mysqli_num_rows($result)==1){

        session_start();
        $row=mysqli_fetch_array($result,MYSQLI_BOTH);

        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"]=$user;
        $_SESSION["role"] =  $row['RoliEmer'];

        if($row['RoliEmer']=="admin"){
            header("location:admin.php");
        }
       else  if($row['RoliEmer']=="mesues"){
            header("location:mesues.php");
        }
       else if($row['RoliEmer']=="nxenes"){
            header("location:nxenes.php");
        }
       else if($row['RoliEmer']=="prind"){
            header("location:prind.php");
        }
       else
       {
          header("location:form.html");

       }

    }





