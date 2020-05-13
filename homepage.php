<?php
require_once('config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="homepage.css">
  <title>Document</title>
</head>

<body>
  <div class="container">

    <div class="topbar">


      <div class="admin">

        <p><i class="fas fa-user-shield"></i> <?php

                                              echo  $_SESSION["username"];

                                              ?></p>
      </div>
      <p><i class="fas fa-user-shield"></i> Admin name</p>
    </div>
    <div class="menu">
      <ul>
        <li><a class="active" href="homepage.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn"><i class="fas fa-users"></i> Menage Users</a>
          <div class="dropdown-content">
            <a href="register.php">Student</a>
            <a href="registerparent.php">Parent</a>
            <a href="registerteacher.php">Teacher</a>
          </div>
        </li>
        <li><a href="subject.php"><i class="fas fa-address-book"></i> Subjects</a></li>
        <li><a href="#about"><i class="fas fa-address-book"></i> Attendance</a></li>
        <li><a href="#about"><i class="fas fa-marker"> </i> Marks</a></li>
        <li><a href="#about"><i class="fas fa-envelope-open-text"> </i> Notify</a></li>
        <li><a href="#about"><i class="fas fa-calendar-check"></i> Events</a></li>
        <li><a href="#about"><i class="fas fa-business-time"></i> Timetable</a></li>

      </ul>


    </div>
    <a href="logout.php" class="button">Logout</a>
    <div class="icons">

      <h1><?php

          echo "Welcome    " . $_SESSION["username"];

          ?></h1>
      <hr>



    </div>

  </div>

</body>