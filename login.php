<?php
include("connection.php");
$user=$_POST['username'];
$pass=$_POST['password'];
var_dump($user);die;
// if(isset($user)&& isset($pass)){
	
// 	$role="select  RoliEmer 
// 	       from user u join roli r on u.RolID=r.RoliID 
// 	      where username='."$user".' and password='."$pass".' limit 1";
// 	      $result=mysql_query($role);

// 	      if(mysql_num_rows($result)==1 && $role=="admin"){
	      	
// 	      	window.location.href="admin.php";
// 	      }
// 	      else if (mysql_num_rows($result)==1 && $role=="mesues")
// 	      {
// 	      	window.location.href="mesues.php";
// 	      }
// 	      else if (mysql_num_rows($result)==1 && $role=="nxenes") {
// 	      window.location.href="nxenes.php";
// 	      }
// 	      else if (mysql_num_rows($result)==1 && $role=="prind") {
// 	      	window.location.href="prind.php";
// 	      }
// 	      else{
// 	      	document.getElementByID("mesazh").innerHTML="ky user nuk ekziston";

// 	      }
// 	  }
// 	      else {
// 	      	document.getElementByID("mesazh").innerHTML="Ju lutem plotesoni te dhenat e mesiperme";
// 	      }
// 	  }
// ?>