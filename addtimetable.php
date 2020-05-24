<?php
require_once ('config.php');
if(isset($_GET['id'])){
    $lendaID = $_GET['id'];
    mysqli_query($conn,"DELETE FROM orari WHERE OrariID=$lendaID");
    echo "<script>window.open('subject.php?mes=Data Deleted..','_self')</script>";
}

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
              
                echo "<div class='success'>Insert success</div>";
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
    <div class="tbox">
            <h3 style="margin-top:30px;"> Timetable Details</h3><br>
            <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
            ?>
            <table border="1px">
                <tr>
                <th>Nr.</th>
                    <th>Viti</th>
                    <th>Paraleli</th>
                    <th>Dita</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $lendet="select * FROM  orari";
                $res=$conn->query($lendet);
                if($res->num_rows>0){
                    $i=0;
                    while($r=$res->fetch_assoc()){
                        $i++;
                        echo "<tr>
                        <td>{$i}</td>
                        <td>{$r["Viti"]}</td>
                        <td>{$r["Paraleli"]}</td>
                        <td>{$r['Dita']}</td>
                        
                        <td><a href='addtimetable.php?id={$r["LendaID"]}' class='btn_delete'>Delete</td>
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