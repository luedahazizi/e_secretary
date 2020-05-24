<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}

else {
    if ($_SESSION['role'] == 'nxenes') {


        echo "
    <!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Student</title>

    <style>
        #esecretary{
            font-size: 20px;
            color: Black;
        }
        body{
            background-color: white;
            height: 100%;
            max-height: 100vh;
            max-width: 100vh;
        }
        #upperpannel{
            background-color:#0099e6 ;
            height: 45px;
            width: 1000vh;
            position: relative;
            top:-30px;
        }
        
       .sidenav{
       
       background-color:lightgray;
       width:40%;
       height:100vh;
       top:-170px;
       position: relative;
       }
     
        #hello{
        padding-left: 550px;
            font-size: 50px;
            width:50%;
            
       }
        #studentname{
            left: 1200px;
            position:relative;
            top: -30px;
            font-size: 20px;
            color:black;
            
        }
        #imazh{
        position: relative;
        left:420px;
        width: 500px;
        height:450px;
        top: -680px;
        }
        #text{
        position: relative;
        background-color:lightgray;
        width: 50%;
        left:1015px;
        top: -1305px;
        height:100vh;
        font-size:18px;   
        color:black;
        }
        


.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #0099e6;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}


.sidenav a:hover, .dropdown-btn:hover {
  color:black;
}


.active {
  background-color:#0099e6;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: whitesmoke;
  padding-left: 8px;
}



    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<div id=\"upperpannel\">
    <h4 id=\"esecretary\"><u>E_secretary</u></h4>
    
    <h4 id=\"studentname\"><img src='https://image.flaticon.com/icons/png/512/44/44948.png' style='width:20px ;height:20px;'>";
        echo $_SESSION['emer'] . "  " . $_SESSION['mbiemer'];
        echo "</h4>
</div>
<div id=\"content\">
    <h2 id=\"hello\">Welcome ";
        echo $_SESSION['emer'];
        echo "</h2>
</div>

<div class='sidenav'>
    
    <a href=\"attendanceStudent.php\" id=\"attendance\"><img src='https://image.flaticon.com/icons/png/512/42/42446.png' style='width:25px ;height:25px;'> Attendance</a> <br>
    <a href=\"marksStudent.php\" id=\"marks\"><img src='https://www.shareicon.net/data/512x512/2016/08/06/807541_edit_512x512.png' style='width:25px ;height:25px;'>Marks</a><br>
    <a href=\"subjectsStudent.php\" id=\"subjects\"><img src='https://uk-dc.org/wp-content/uploads/2018/07/book-stack.png' style='width:25px ;height:25px;'>Subjects</a><br>
    <a href=\"notificationsStudent.php\" id=\"notifications\"><img src='https://www.freeiconspng.com/uploads/bell-icon-16.png' style='width:25px ;height:25px;'>Notifications</a><br>
       <a href=\"timetable.php\" id=\"timetable\"><img src='https://w7.pngwing.com/pngs/782/394/png-transparent-computer-icons-public-transport-timetable-font-schedule-miscellaneous-text-rectangle.png' style='width:25px ;height:25px;'>Timetable</a><br>
    
    
    <button class=\"dropdown-btn\"><img src='https://upload.wikimedia.org/wikipedia/commons/6/6d/Windows_Settings_app_icon.png' style='width:25px ;height:25px;'>Settings
    <i class=\"fa fa-caret-down\"></i>
  </button>
  <div class=\"dropdown-container\">
    <a href=\"StudentData.php\"><img src='https://image.flaticon.com/icons/png/512/36/36069.png' style='width:25px ;height:25px;'>Personal Data</a>
    <a href=\"changePassStudent.php\"><img src='https://f1.pngfuel.com/png/518/221/75/password-symbol-key-user-interface-project-pictogram-logo-png-clip-art.png' style='width:25px ;height:25px;'>Change Password</a>
    <a href=\"LogOut.php\"><img src='https://cdn.onlinewebfonts.com/svg/img_47628.png' style='width:25px ;height:25px;'>Logout</a>
  </div>
</div>
<div id='content'>
<img src='https://media.istockphoto.com/vectors/group-of-students-vector-id913084642?k=6&m=913084642&s=612x612&w=0&h=O3tez2psXkgDxohsSaNq9_luc3anv1YzAQKwG478AlE=' id='imazh'>;
</div>
<div id='text'>
<h5>Hello .This page is dedicated to you.Here you can find information about your progress.Click in the left menu to access some services we have provided for you.
</h5><h5>In the attendance  section you will find the dates and subjects in which your child was absent.</h5><h5>In the marks section you will find a 
list of marks in each subject.</h5><h5>You can also 
 find a list of subjects and the teachers in the subjects section and notifications in the notification section.</h5>
 <h5>If you have any further question please contact us at the following email adress.</h5>
 
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName(\"dropdown-btn\");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener(\"click\", function() {
  this.classList.toggle(\"active\");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === \"block\") {
  dropdownContent.style.display = \"none\";
  } else {
  dropdownContent.style.display = \"block\";
  }
  });
}
</script>

</body>
</html>
";
    }
    else{
        header("location:error.html");
    }
}
?>