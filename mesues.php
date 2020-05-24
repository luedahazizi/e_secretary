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
  <link rel=\"stylesheet\" href=\"mesuesstyle1.css\">
  <title>Document</title>
  <style>
  body { background: url(https://danerwin.typepad.com/.a/6a00e55187f8f6883401b7c7f69140970b-pi);height:100vh;
    background-size: 100%;background-position:center ;}
    </style>
</head>
<body>
  <div class=\"container\">
    <div class=\"topbar\">
      <div class=\"admin\">
      <p id=\"parentname\">
        <i class=\"fas fa-user-shield\"></i> ";

    echo $_SESSION['emer'] . "  " . $_SESSION['mbiemer'];

    echo"            </p>
      </div>
      
    </div>
    <div class=\"menu\">
      <ul>
        <li><a class=\"active\" href=\"settingspage.php\"><i class=\"fas fa-tachometer-alt\"></i>Settings</a></li>
        <li class=\"dropdown\">
        
          <div class=\"dropdown-content\">
            <a href=\"registerteacher.php\">Teacher</a>
          </div>
        </li>
        <li><a href=\"lendet.php\"><i class=\"fas fa-address-book\"></i> Subjects</a></li>
        <li><a href=\"attendance.php\"><i class=\"fas fa-address-book\"></i> Attendance</a></li>
        <li><a href=\"index.php\"><i class=\"fas fa-marker\"> </i> Marks</a></li>
        <li><a href=\"uploadfiles.php\"><i class=\"fas fa-book\"> </i>Lessons</a></li>
      
        <li><a href=\"timetable.php\"><i class=\"fas fa-business-time\"></i> Timetable</a></li>
        
      </ul>
    </div>
   
    <div class=\"icons\">
      <h1>";

    echo "Welcome    " . $_SESSION['emer'];

    echo "! </h1>
      
     
      
    </div>
  </div>
</body>
";
}
?>