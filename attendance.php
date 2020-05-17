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

<th>Subject</th>
<th>Date</th>
<tr>
";
    $query = "select l.emri,m.data
    from mungesat m join nxenes n on m.nxenesID=m.NxenesID join user u on u.UserID=n.nxenesID join lenda l on l.lendaID=m.lendaID
    where u.emer='Teuta'";

    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo "
 
 <td >";
        echo $row['emri'];
        echo "</td>
 <td >";
        echo $row['data'];
        echo "</td>

         </tr>";
    };
    echo "</table></body></html>";



}
