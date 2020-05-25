<?php
require_once('config.php');
include "homepage.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
    <style>
        img {
            margin-left: 35%;
        }
    </style>
</head>
<body>

<h1 style="margin-top:10px; margin-left:43%; margin-bottom:4px;font-size:40px; " >Welcome  <?php echo  $_SESSION['emer'] ?></h1>
<div style="display: flex;">

  <div class="w3-card-4" style="width:10%; margin-left:25%;margin-top:1%;background:rgb(242, 250, 250);box-shadow:20px 20px 10px grey;">
    <img src="images/student.jpg" alt="Alps" style="width:50%; margin-left:20%;">
    <div class="w3-container w3-center">
    <?php
$result = mysqli_query($conn,"select count(1) FROM nxenes");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo "Students: " . $total;

     
      ?>
    </div>
  
</div>




  <div class="w3-card-4" style="width:10%; margin-left:15%;margin-top:1%;background:rgb(242, 250, 250);box-shadow:20px 20px 10px grey; ">
    <img src="images/admin.png" alt="Alps" style="width:50%; margin-left:20%;">
    <div class="w3-container w3-center">
    <?php
$result = mysqli_query($conn,"select count(1) FROM prindi");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo "Parent: " . $total;

     
      ?>
    </div>
  
</div>





  <div class="w3-card-4" style="width:10%; margin-left:15%;margin-top:1%;background:rgb(242, 250, 250);box-shadow:20px 20px 10px grey; ">
    <img src="images/teacher.jpg" alt="Alps" style="width:50%; margin-left:20%;">
    <div class="w3-container w3-center">
    <?php
$result = mysqli_query($conn,"select count(1) FROM mesues");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo "Teacher: " . $total;

     
      ?>
    </div>
  
</div>

</div>

    <div>
    <img src="images/admin-settings-male.png" height="500px"  alt="">
    </div>
</body>
</html>