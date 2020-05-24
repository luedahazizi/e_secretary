<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: form.html');
  exit;
}

else {
  if (isset($_SESSION['role'])=='admin') {

  header("location:dashboard.php");
}else {
    header("location:error.html");
  }
  }
  ?>