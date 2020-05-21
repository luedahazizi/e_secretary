<?php
	session_start();
	include("connection.php");
	if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
	}
	$emerPrindi = $_SESSION['emer'];
	$mbiemerPrindi = $_SESSION['mbiemer'];

	$gjejFemijeQuery = "Select user.emer, user.mbiemer, lenda.emri,   mungesat.data from user
Inner join mungesat on mungesat.NxenesID = user.userid
Inner join lenda on lenda.lendaId = mungesat.lendaid
Where user.userid in (SELECT nx.userID from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer ='$emerPrindi' and p.Mbiemer = '$mbiemerPrindi') ";

  $result1 = mysqli_query($connect, $gjejFemijeQuery);

echo "<html><head>
<style>
body{
background-image: url(\"https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg\");
				background-repeat: no-repeat;
				background-size: 100%;
}
h3{
color:rgb(37, 87, 95);
font-size: 30px;
}

#select{
color:rgb(37, 87, 95);
position: relative;
left: 400px;
top:200px;
}
form{
position:relative;
left:200px;
}
#continue:hover{
background-color: rgb(37, 87, 95);
color:whitesmoke;
}

</style>
</head>
<body><div id='select'><h3>Select the student you want to continue with: </h3><form method='post' action='prind.php'>";

echo "<select name='femije' id='femije'>";
while ( $d = mysqli_fetch_array($result)) {

echo "<option value='".$d['Emer']."'>".$d['Emer']."</option>";
}
echo "</select>";
echo "<br>";
echo "<input type='submit' id='Continue' value='Continue' > </div>";
echo "</form>
</body>
<html>";


