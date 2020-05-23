<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    $emer = $_SESSION["emer"];
    $mbiemer = $_SESSION["mbiemer"];
    $query = "select viti,paraleli from nxenes n join user u on n.nxenesID=u.userid where u.emer='$emer' and u.mbiemer='$mbiemer'";
    $row1 = mysqli_query($connect, $query);
    if ($result = mysqli_fetch_array($row1)) {
        $viti = $result['viti'];
        $paraleli = $result['paraleli'];
        echo "<html>
<head>
<style>
body{
background-image: url(\"https://i.pinimg.com/564x/a7/70/13/a77013e286870cf305d06dd494ff4e37.jpg\");
				background-repeat: no-repeat;
				background-size: 50%;
}
#info{
position: relative;
left:600px;
color: Black;
font-size: 20px;
border-color: midnightblue;
}
#title{
position: relative;
left:-50px;
color: #0099e6;
}

</style>
</head>
<body>
<div id='info'>
<h2 id='title'>
Personal Information
</h2>
<h3>Name Surname: </h3>
";
        echo $_SESSION['emer'] . " " . $_SESSION['mbiemer'];

        echo " <h3>Email Adress</h3>";
        echo $_SESSION['email'];
        echo "<h3>Username:</h3>";
        echo $_SESSION['username'];
        echo "<h3> Telephone:</h3>";
        echo $_SESSION['telefon'];
        echo "<h3>Year of study</h3>";
        echo $viti;
        echo "<h3>Group</h3>";
        echo $paraleli;
        echo "</div>
</body>
</html>
";
    }
}