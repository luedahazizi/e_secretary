<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}

else {
    if(isset($_POST['femije'])){
        $femija  = $_POST['femije'];
        $_SESSION['femije'] = $femija;
    }

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
            background-color: white;
            height: 100%;
            max-height: 100vh;
            max-width: 100vh;
        }
        #upperpannel{
            background-color:rgb(37, 87, 95) ;
            height: 45px;
            width: 1000vh;
        }
        
       .sidenav{
       
       background-color:lightgray;
       width:40%;
       height:100vh;
       top:-140px;
       position: relative;
       }
     
        #hello{
        padding-left: 550px;
            font-size: 50px;
            width:50%;
            
       }
        #parentname{
            left: 1200px;
            position:relative;
            top: -85px;
            font-size: 20px;
            color:darkgray ;
            
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
        top: -1275px;
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
    <input type=\"text\" placeholder=\"Search..\" id =\"search\">
    <h4 id=\"parentname\">";
       echo $_SESSION['emer'] . "  " . $_SESSION['mbiemer'];
    echo "</h4>
</div>
<div id=\"content\">
    <h2 id=\"hello\">Welcome " ;
    echo $_SESSION['emer'];
    echo "</h2>
</div>

<div class='sidenav'>
    
    <a href=\"attendance.php\" id=\"attendance\">Attendance</a> <br>
    <a href=\"marks.php\" id=\"marks\">Marks</a><br>
    <a href=\"subjects.php\" id=\"subjects\">Subjects</a><br>
    <a href=\"notifications.php\" id=\"notifications\">Notifications</a><br>
    <a href=\"pagesa.php\" id=\"payment\">Payment</a><br>
    <button class=\"dropdown-btn\">Settings
    <i class=\"fa fa-caret-down\"></i>
  </button>
  <div class=\"dropdown-container\">
    <a href=\"personaldata.php\">Personal Data</a>
    <a href=\"changepass.php\">Change Password</a>
    <a href=\"LogOut.php\">Logout</a>
  </div>
</div>
<div id='content'>
<img src='prindfemije.jpg' id='imazh'>;
</div>
<div id='text'>
<h5>Hello .This page is dedicated to you.Here you can find information about your child.Click in the left menu to access some services we have provided for you.
</h5><h5>In the attendance  section you will find the dates and subjects in which your child was absenth.</h5><h5>In the marks section you will find a 
list of marks in each subject.</h5><h5>You can also 
 find a list of subjects and the teachers in the subjects section and notifications in the notification section.</h5><h5>
 We have also provided the Online Payment service using PAYPAL.</h5><h5>
 You can access the service in the payments section.
 </h5><h5>If you have any further question please contact us at the following email adress.</h5>
 
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

?>
