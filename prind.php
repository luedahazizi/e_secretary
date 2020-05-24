<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin']) ){
    header('Location: form.html');
    exit;
}

else {
if($_SESSION['role']=='prind'){

    echo "
    <!DOCTYPE html>
<html lang=\"en\">
<head>
<link href='https://fonts.googleapis.com/css?family='ChelseaMarket' rel='stylesheet'>
    <meta charset=\"UTF-8\">
    <title>Prindi</title>

    <style>
        #esecretary{
            font-size: 20px;
            color: darkgray;
            font-family:Candara;
        }
        body{
            background-color: white;
            height: 100%;
            max-height: 100vh;
            max-width: 100vh;
        }
        #upperpannel{
            background-color:rgb(37, 87, 95) ;
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
        padding-left: 500px;
            font-size: 50px;
            width:50%;
            
       }
        #parentname{
            left: 1200px;
            position:relative;
            top: -35px;
            font-size: 20px;
            color:black ;
            
        }
        #imazh{
        position: relative;
        left:420px;
        width: 500px;
        height:450px;
        top: -650px;
        }
        #text{
        position: relative;
        background-color:lightgray;
        width: 50%;
        left:1015px;
        top: -1305px;
        height:100vh;
        font-size:18px;   
        color:rgb(119, 136, 153);     
        }
        


.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}


.sidenav a:hover, .dropdown-btn:hover {
  color:rgb(37, 87, 95) ;
}


.active {
  background-color: rgb(37, 87, 95);
  color: white;
}


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
    
    <h4 id=\"parentname\"><img src='https://image.flaticon.com/icons/png/512/44/44948.png' style='width:20px ;height:20px;'>";
       echo $_SESSION['emer'].'  '.$_SESSION['mbiemer'];
    echo "</h4>
</div>
<div id=\"content\">
    <h2 id=\"hello\">Welcome " ;
    echo $_SESSION['emer'];
    echo "</h2>
</div>

<div class='sidenav'>
    
    <a href=\"attendance.php\" id=\"attendance\"><img src='https://image.flaticon.com/icons/png/512/42/42446.png' style='width:25px ;height:25px;'> Attendance</a> <br>
    <a href=\"marks.php\" id=\"marks\"><img src='https://www.shareicon.net/data/512x512/2016/08/06/807541_edit_512x512.png' style='width:25px ;height:25px;'>Marks</a><br>
    <a href=\"subjects.php\" id=\"subjects\"><img src='https://uk-dc.org/wp-content/uploads/2018/07/book-stack.png' style='width:25px ;height:25px;'>Subjects</a><br>
    <a href=\"notifications.php\" id=\"notifications\"><img src='https://www.freeiconspng.com/uploads/bell-icon-16.png' style='width:25px ;height:25px;'>Notifications</a><br>
    
    <button class=\"dropdown-btn\"><img src='https://upload.wikimedia.org/wikipedia/commons/6/6d/Windows_Settings_app_icon.png' style='width:25px ;height:25px;'>Settings
    <i class=\"fa fa-caret-down\"></i>
  </button>
  <div class=\"dropdown-container\">
    <a href=\"personaldata.php\"><img src='https://image.flaticon.com/icons/png/512/36/36069.png' style='width:25px ;height:25px;'>Personal Data</a>
    <a href=\"changePassParent.php\"><img src='https://f1.pngfuel.com/png/518/221/75/password-symbol-key-user-interface-project-pictogram-logo-png-clip-art.png' style='width:25px ;height:25px;'>Change Password</a>
    <a href=\"LogOut.php\"><img src='https://cdn.onlinewebfonts.com/svg/img_47628.png' style='width:25px ;height:25px;'>Logout</a>
  </div>
</div>
<div id='content'>
<img src='prindfemije.jpg' id='imazh'>;
</div>
<div id='text'>
<h5>Hello .This page is dedicated to you.Here you can find information about your child.Click in the left menu to access some services we have provided for you.
</h5><h5>In the <b>attendance</b>  section you will find the dates and subjects in which your child was absent.</h5><h5>In the<b> marks</b> section you will find a 
list of marks in each subject.</h5><h5>You can also 
 find a list of subjects and the teachers in the <b>subjects</b> section and notifications in the<b> notification</b> section.</h5><h5>If you have any further question please contact us at the following email adress.</h5>
 
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
