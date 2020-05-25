<?php
include("config.php");
include "homepage.php";

if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
echo "<html>
<head>
<style>
body{

}
#info{
position: relative;
left:350px;
color: rgb(37, 87, 95);
font-size: 20px;
border-color: rgb(37, 87, 95);
}
#title{
position: relative;
left:-50px;
}
.btn_add{
    background-color:rgb(121, 174, 182);
      color: white;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
      font-size: 15px;
      border: ghostwhite;
      margin-left:90px;
      }
</style>
</head>
<body>

<div id='info'>
<h2 id='title'>
Personal Information
<a  href='changepass.php' class='btn_add'>Change password</a>
</h2><hr>
<h3>Name Surname: </h3>
" ;
echo $_SESSION['emer'] . " " . $_SESSION['mbiemer'];

echo " <h3>Email Adress</h3>";
echo $_SESSION['email'];
echo "<h3>Username:</h3>";
echo $_SESSION['username'];
echo"<h3> Telephone:</h3>";
echo $_SESSION['telefon'];
echo"</div>
</body>
</html>
";
}