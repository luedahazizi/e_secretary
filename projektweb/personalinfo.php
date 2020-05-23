<?php
include_once('config.php');
$query="Select * From nxenes";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<tittle>
<body  style="background: url(https://i1.pickpik.com/photos/364/307/680/classroom-blackboard-study-living-room-preview.jpg);height:100vh;
background-size: 100%;background-position:center ;">
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="4"><h2>Students's infomation</h2>
</tr>
<tr>
<th>Birthdate</th>
<th>Grade</th>
<th>Parallel</th>
<th>Student's ID</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['Datelindje'];?></td>
    <td><?php echo $row['Viti']; ?></td>
    <td><?php echo $row['Paraleli']; ?></td>
    <td><?php echo $row['NxenesID']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>

