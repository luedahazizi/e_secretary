<?php
require_once ('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notify</title>
    <link rel="stylesheet" href="subject.css">
   <style>
       label {
    /* Other styling... */
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
}

   </style>
       
</head>
<body>

<?php
    include "homepage.php";
    ?>
<div class="section">
<h1  style="margin-top:10px; margin-left:53%; margin-bottom:4px;font-size:40px;">Add timetable</h1><hr>
    <div class="notify">
        <?php
        
        if(isset($_POST['viti']) && isset($_POST['paraleli'])  && isset($_POST['dita']) &&  isset($_POST['ora']) &&  isset($_POST['lenda'])&& isset($_POST['add'])){
            $viti=$_POST['viti'];
            $paraleli=$_POST['paraleli'];
            $dita=$_POST['dita'];
            $ora=$_POST['ora'];
            $lenda=$_POST['lenda'];
            $idlenda = "SELECT  l.LendaID
            FROM lenda l INNER JOIN orari o ON l.LendaID=o.LendaID
            WHERE l.Emri='$lenda'";
             $resultm = mysqli_query($conn, $idlenda);
             if($resultm->num_rows>0){
             $row1 = mysqli_fetch_array($resultm);
            $notify="insert into orari (Viti,Paraleli,Dita,Ora,LendaID) values ($viti,'$paraleli','$dita','$ora', $row1[LendaID])";
            if($conn ->query($notify)){
              
                echo("Error description: " . mysqli_error($conn));
            }
        }
           else {
               echo("Error description: " . mysqli_error($conn));
            }
        }
        ?>
        
      
        <form action="addtimetable.php" method="post">
       
            <label >Year</label>
            <input type="text" class="input"  name="viti" id="viti" required><br>
            <label >Group</label><br>
            <input type="text" class="input"  name="paraleli" id="paraleli" required><br>
            <label >Day</label><br>
            <input type="text" class="input" name="dita" id="dita"><br>
            <label>Time</label><br>
            <input  type="time" class="input" name="ora" id="ora"  ><br>
            <label>Subject</label><br>
            <input type="text" class="input" name="lenda" id="lenda"  >
            
  <button type="submit" name="add" class="btn_publish">Add</button>
        </form>
    </div>
</div>
    
</body>
</html>