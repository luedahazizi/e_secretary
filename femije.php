<?php
	session_start();
	include("connection.php");
	if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
	}
	$emerPrindi = $_SESSION['emer'];
	$mbiemerPrindi = $_SESSION['mbiemer'];

	$gjejFemijeQuery = "SELECT nx. * from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer ='$emerPrindi' and p.Mbiemer = '$mbiemerPrindi' ";

  $result = mysqli_query($connect, $gjejFemijeQuery);
echo "<form method='get' action='prind.php'>";

echo "<select name='femije'>";
while ( $d = mysqli_fetch_array($result)) {

echo "<option value='{".$d['Emer']."}'>".$d['Emer']."</option>";
}
echo "</select>";
echo "<br>";
echo "<input type='submit' id='Continue' value='Continue' > ";
echo "</form>";

