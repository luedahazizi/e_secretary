<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
echo "<html>
<head>
<style>
body{
background-image: url(\"https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg\");
}
#info{
position: relative;
left:600px;
color: rgb(37, 87, 95);
font-size: 20px;
border-color: rgb(37, 87, 95);
}
#title{
position: relative;
left:-50px;
}

</style>
</head>
<body>
<div id='info'>
<h2 id='title'>
Personal Information
</h2>
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