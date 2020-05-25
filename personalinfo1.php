<?php
$userID="";
include_once('config.php');
include "access1.php";
$query="Select * From user u join nxenes n on u.userID=n.NxenesID";
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
<th>ID</th>
 <th>Name</th>
  <th>Last Name</th>
 <th>Email</th>
  <th>Phone</th>
 <th>Birthday</th>
   <th>Year</th>
   <th>Group</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['userID'];?></td>
    <td><?php echo $row['Emer']; ?></td>
    <td><?php echo $row['Mbiemer']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['Telefon']; ?></td>
    <td><?php echo $row['Datelindje']; ?></td>
    <td><?php echo $row['Viti']; ?></td>
    <td><?php echo $row['Paraleli']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>