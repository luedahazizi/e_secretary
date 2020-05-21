<?php
require_once('config.php');
include('subdelete.php');
if (isset($_GET['edit'])) {
    
    
    $lendaID = $_GET['edit'];
    $edit_state = true;
    
    $rec = mysqli_query($conn, "SELECT Emer, Emri,Viti,LendaID FROM lenda join user on MesuesID=UserID  WHERE LendaID=$lendaID");
    $record = mysqli_fetch_array($rec);
    
    $lenda = $record['Emri'];
    $viti = $record['Viti'];
    $mesues = $record['Emer'];
    $lendaID = $record['LendaID'];
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <link rel="stylesheet" href="subject.css">
</head>

<body>

    <div id="section">
        <?php

        include "homepage.php";
        ?>
        <div class="content">

            <h3> Add Subject</h3><br>
            <?php
            if(isset($_POST['lenda'])&& isset($_POST['viti']) && isset($_POST['mesues']) && isset($_POST['add'])) {
                $lenda = $_POST['lenda'];
                $viti = $_POST['viti'];
                $mesues=$_POST['mesues'];
              $mesuesid = "SELECT  userID 
                FROM user join mesues on userID=MesuesID
                WHERE Emer='$mesues'";
                 $resultm = mysqli_query($conn, $mesuesid);
                 if($resultm->num_rows>0){
                 $row1 = mysqli_fetch_array($resultm);
                $subject="INSERT INTO lenda (emri,viti,MesuesID) values ('$lenda','$viti','$row1[userID]')";
     if($conn ->query($subject)){
         echo "<div class='success'>Insert success</div>";
     }
    }
    else {
        echo "<div class='error'>Teacher don't exist</div>";
     }
    
      } 
         ?>

            <form method="post" action="subject.php">
            <input type="hidden" name="lendaID" value="<?php echo $lendaID; ?>">
                <label>Subject Name</label><br>
                <input type="text" name="lenda" id="lenda" required class="input" value="<?php echo $lenda; ?>"><br>
                <label>Year</label><br>
                <input type="text" name="viti"  id="viti" required class="input" value="<?php echo $viti; ?>"><br>
                <label>Teacher Name</label><br>
                <input type="text" name="mesues" id="mesues" value="<?php echo $mesues; ?>" class="input"><br>
                <?php if ($edit_state == false): ?>
                <button type="submit" name="add" class="btn">Save Subject </button>
            <?php else : ?>
                <button type="submit" name="update" class="btn">Update</button>
            <?php endif ?>
            <?php
            
            ?>
            </form>

            </div>
        
        <div class="tbox">
            <h3 style="margin-top:30px;"> Subject Details</h3><br>
            <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
            ?>
            <table border="1px">
                <tr>
                    <th>S.No</th>
                    <th>Subject Name</th>
                    <th>Year</th>
                    <th>Teacher Name</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $lendet="select Emer,Emri,Viti,LendaID FROM  lenda l join user u on l.MesuesID=u.userID";
                $res=$conn->query($lendet);
                if($res->num_rows>0){
                    $i=0;
                    while($r=$res->fetch_assoc()){
                        $i++;
                        echo "<tr>
                        <td>{$i}</td>
                        <td>{$r["Emri"]}</td>
                        <td>{$r["Viti"]}</td>
                        <td>{$r['Emer']}</td>
                        
                        <td><a href='subdelete.php?id={$r["LendaID"]}' class='btn_delete'>Delete</td>
                        <td><a href='subject.php?edit={$r["LendaID"]}' class='btn_update'>Update</td>
                        </tr>";
                    }
                }
                else{
                    echo("Error description: " . mysqli_error($conn));
                }
                ?>
        </table>
    </div>
    </div>
</body>
</html>