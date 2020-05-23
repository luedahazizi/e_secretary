
<?php 
include('attendanceconfig.php');

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="stylestyle.css">
</head>

<body style="background: url(https://i1.pickpik.com/photos/364/307/680/classroom-blackboard-study-living-room-preview.jpg);height:100vh;
background-size: 100%;background-position:center ;">

    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
            ?>
        </div>
    <?php endif ?>
    <table>
        <thread>
            <tr>
        
                <th>Student's ID</th>
                <th>Subject's ID</th>
                <th>Date</th>
            </tr>
        </thread>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                
                    <td><?php echo $row['NxenesID']; ?></td>
                    <td><?php echo $row['LendaID']; ?></td>
                    <td><?php echo $row['Data']; ?> </td>
                    
                </tr>
            <?php   } ?>

        </tbody>
    </table>
    <form method="post" action="attendanceconfig.php">
    
    <div class="input-group">
            <label>Student's ID</label>
            <input type="number" name="NxenesID">
        </div>

        <div class="input-group">
            <label>Subject's ID</label>
            <input type="number" name="LendaID">
        </div>

        <div class="input-group">
            <label>Date</label>
            <input type="date" name="Data" >
        </div>

        <div class="input-group">
            
                <button type="submit" name="Save" class="btn">Save </button>
        

        </div>
    </form>
</body>

</html>