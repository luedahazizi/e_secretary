<?php
include_once('connection.php');
$query = "Select * From lenda";
$result = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html>
<title>courses</title>

<style>
    table {
        position: absolute;
        top: 10%;
        right: 60%;
    }
</style>

<body style="background: url(https://images.unsplash.com/photo-1468779036391-52341f60b55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60); height:100vh; background-size: 100%; background-position:center;">
<table align="center" border=" 1px " style=" width:400px; line-height:30px; color:blueviolet;">
    <tr>
        <th colspan="4">
            <h1>COURSES</h1>
    </tr>
    <tr>

        <th>Name</th>
        <th>Grade</th>
    </tr><?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?><tr>

        <td><?php echo $row['Emri']; ?></td>
        <td><?php echo $row['Viti']; ?></td>
        </tr><?php
    }
    ?>
</table>

</body>

</html>