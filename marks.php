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
<th>Mark</th>
<th>Description</th>
<tr>
";

    $query = " SELECT l.Emri,t.Vleresimi,t.Pershkrimi
FROM user u join nxenes n on u.userID=n.NxenesID join notat t on t.NxenesID=n.NxenesID join lenda l on l.LendaID=t.LendaID
where u.Emer='Teuta'";


    $result = mysqli_query($connect, $query);


        while ($row=mysqli_fetch_array($result)) {

            echo "
 
 <td >";
            echo $row['Emri'];
            echo "</td>
 <td >";
           echo $row['Vleresimi'];
            echo "</td>
 <td >";
            echo $row['Pershkrimi'];
            echo "
 </td>";
            echo "</tr>";
        };
        echo "</table></body></html>";

}