<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: form.html');
  exit;
}

else {

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

    <div class=\"topbar\">


      <div class=\"admin\">
      <h4 id=\"esecretary\">E_secretary</h4>
      <input type=\"text\" placeholder=\"Search..\" id =\"search\">
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
            <a href=\"student.php\">Student</a>
            <a href=\"parent.php\">Parent</a>
            <a href=\"teacher.php\">Teacher</a>
          </div>
        </li>
        <li><a href=\"subject.php\"><i class=\"fas fa-address-book\"></i> Subjects</a></li>
        <li><a href=\"notify.php\"><i class=\"fas fa-envelope-open-text\"> </i> Notify</a></li>
        
      
        <li><a href=\"timetable.php\"><i class=\"fas fa-business-time\"></i> Timetable</a></li>
        <li><a href=\"changepass.php\"><i class=\"fas fa-envelope-open-text\"> </i> Settings</a></li>
        <li> <a href=\"logout.php\" class=\"button\">Logout</a></li>

      </ul>


    </div>
   
    <div class=\"icons\">

      <h1>";

          echo "Welcome    " . $_SESSION['emer'];

        echo " </h1>
      
     
      



    </div>

  </div>

</body>
";
}
?>