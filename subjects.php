<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    echo "<html>
<body>
<table>

<th>Subject Name</th>
<th>Teacher </th>
<tr>
";
    $query = "SELECT  DISTINCT l.Emri, concat(u.Emer,' ',u.Mbiemer) as Teacher
from 
lenda l join mesues m on l.MesuesID=m.MesuesID join nxenes n on n.Viti=l.Viti 
join user u on u.userID=m.MesuesID
where n.viti=(select viti from nxenes n join user u on u.userID=n.NxenesID where u.Emer='Teuta')";


    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo "
 
 <td >";
        echo $row['Emri'];
        echo "</td>
 <td >";
        echo $row['Teacher'];
        echo "</td>

         </tr>";
    };
    echo "</table></body></html>";


}