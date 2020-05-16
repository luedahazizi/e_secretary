<?php
include("connection.php");
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
    <title>Prindi</title>

    <style>
        #esecretary{
            font-size: 20px;
            color: darkgray;
        }
        body{
            background-color: whitesmoke;
        }
        #upperpannel{
            background-color:rgb(37, 87, 95) ;
            height: 45px;
        }
        #search{
           left: 300px;
            position:relative;
          top:-40px;
            background-color: white;
            border-radius: 10px;
        }
       #verticalMenu{
       height:100%;
       background-color:lightgray;
       width:20%;
       }
       #verticalMenu a{
       display:block;
       text-decoration: none;
       
       }
       
        #hello{
            padding-left: 550px;
            font-size: 50px;
        }
        #parentname{
            left: 1200px;
            position:relative;
            top: -85px;
            font-size: 20px;
            color:darkgray ;
        }
    </style>
</head>
<body>
<div id=\"upperpannel\">
    <h4 id=\"esecretary\"><u>E_secretary</u></h4>
    <input type=\"text\" placeholder=\"Search..\" id =\"search\">
    <h4 id=\"parentname\">";
       echo $_SESSION['emer'] . "  " . $_SESSION['mbiemer'];
    echo "</h4>
</div>
<div id=\"content\">
    <h2 id=\"hello\">Hello " ;
    echo $_SESSION['emer'];
    echo "</h2>
</div>

<div id=\"verticalMenu\">
    
    <a href=\"attendance.php\" id=\"attendance\">Attendance</a> <br>
    <a href=\"marks.php\" id=\"marks\">Marks</a><br>
    <a href=\"Subjects.php\" id=\"subjects\">Subjects</a><br>
    <a href=\"Notificatons.php\" id=\"notifications\">Notifications</a><br>
    <a href=\"pagesa.html\" id=\"payment\">Payment</a><br>
    <div class='dropdown-content'>
    <a href=\"settings.php\" id=\"settings\">Settings</a>
    <a href=\"Data.php\">Personal Data</a>
      <a href=\"changepass.php\">Change Password</a>
      <a href=\"LogOut.php\">logout</a>
    </div>
</div>

</body>
</html>
";
}
?>
