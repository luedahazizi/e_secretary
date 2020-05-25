<?php



include "access1.php";
$emer= $_SESSION['emer'];
$mbiemer= $_SESSION['mbiemer'];
include_once('config.php');
$query="SELECT l.Emri,l.Viti,l.LendaID FROM lenda l JOIN mesues m ON m.MesuesID=l.MesuesID JOIN user u ON u.userID=m.MesuesID
WHERE u.Emer='$emer' AND u.Mbiemer='$mbiemer'";
$result=mysqli_query($conn,$query)

?>


<!DOCTYPE html>
<html>
<tittle>
<head>Subjects</head>
</tittle>
<body  style="background: url(https://i1.pickpik.com/photos/364/307/680/classroom-blackboard-study-living-room-preview.jpg);height:100vh;
background-size: 100%;background-position:center ;">
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="4"><h2>Subjects</h2>
</tr>
<tr>
 <th>Subject's ID</th>   
<th>Name</th>
<th>Grade</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['LendaID']; ?></td>
    <td><?php echo $row['Emri']; ?></td>
    <td><?php echo $row['Viti']; ?></td>
    
    
    
    </tr>
    <?php
}
?>
</table>
</body>
</html>