<?php
require_once('connection.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: form.html');
  exit;
}

else {
  if (isset($_SESSION['role'])=='admin') {

  echo "

<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
  <link rel=\"stylesheet\" href=\"homepage.css\">
  <title>Document</title>
</head>

<body>
  <div class=\"container\">
  <h4 style=\"margin-top:10px; margin-left:43%; margin-bottom:4px;\" >E_secretary</h4>
    <div class=\"topbar\">


      <div class=\"admin\">
     
     <a href=\"logout.php\" class=\"button\">Logout</a>

      <p id=\"parentname\">
        <i class=\"fas fa-user-shield\"></i> ";

        echo $_SESSION['emer'] . "  " . $_SESSION['mbiemer'];

                                 echo"            </p>
      </div>
      
    </div>
    <div class=\"menu\">
      <ul>
        <li><a class=\"active\" href=\"dashboard.php\"><i class=\"fas fa-tachometer-alt\"></i> Dashboard</a></li>

        <li class=\"dropdown\">
          <a href=\"javascript:void(0)\" class=\"dropbtn\"><i class=\"fas fa-users\"></i> Menage Users</a>
          <div class=\"dropdown-content\">
            <a href=\"studentlist.php\">Student</a>
            <a href=\"parentlist.php\">Parent</a>
            <a href=\"teacherlist.php\">Teacher</a>
          </div>
        </li>
        <li><a href=\"subject.php\"><i class=\"fas fa-address-book\"></i> Subjects</a></li>
        <li><a href=\"notification.php\"><i class=\"fas fa-envelope-open-text\"> </i> Notify</a></li>
        
      
        <li><a href=\"timetable.php\"><i class=\"fas fa-business-time\"></i> Timetable</a></li>
        <li><a href=\"personalinfo.php\"><i class=\"fas fa-cog\"> </i> Settings</a></li>
       
      </ul>


    </div>
   
    <div class=\"icons\">

    <h1>";

  

  echo " </h1>



    </div>

  </div>

</body>
";
}else {
  header("location:error.html");
}
}
?>