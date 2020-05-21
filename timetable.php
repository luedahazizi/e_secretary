<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="subject.css">
</head>
<body>
<?php
    include "homepage.php";
    ?>
    <div class="search">
        <form action="timetable.php" method="post">
            <label for="">Year</label><br>
            <input type="text" name='viti' class="input1" list="viti"
            required><br>
            <datalist id="viti">
    <option value="1">
    <option value="2">
    <option value="3">
  </datalist>
            <label for="">Paraleli</label><br>
            <input type="text" name="paraleli" class="input1" list="paraleli" required>
            <datalist id="paraleli">
    <option value="A">
    <option value="B">
    <option value="C">
  </datalist>
  <button type="submit" name="kerko" class="btn_tbl">Show</button>
        </form>
        </div>
    <div class="timatable">

    
        <table >
            <tr>
                <th></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            
            </tr>
            
            
            <?php
            if(isset($_POST['viti']) && isset($_POST['paraleli'])){
                $viti=$_POST['viti'];
                $paraleli=$_POST['paraleli'];
           
                $orari="Select Emri ,ora,dita from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res=$conn->query($orari);
                if($res->num_rows>0){
                   
                   
                    while($r=$res->fetch_assoc()){
                        if (isset($_POST['kerko'])) {
                           
                                echo"<tr> ";
                                if(($r['dita']=='Monday') && ($r['ora']==8) ){
                                    echo"
                               
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            if(($r['dita']=='Monday') && ($r['ora']=="9:00") ){
                                echo"<tr> 
                               
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            if(($r['dita']=='Monday') && ($r['ora']=="10:00") ){
                                echo"<tr> 
                              
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            if(($r['dita']=='Monday') && ($r['ora']=="11:00") ){
                                echo"<tr> 
                              
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            if(($r['dita']=='Monday') && ($r['ora']=="12:00") ){
                                echo"<tr> 
                               
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            if(($r['dita']=='Monday') && ($r['ora']=="01:00") ){
                                echo"<tr> 
                                
                                <td class='mat'>".$r['Emri']."</td>";
                            }
                            
                            if(($r['dita']=='Tuesday') && ($r['ora']==8)){
                            echo "

                            <td class='mat'>" .$r['Emri'] . "</td>";
                           
                       
                        }
                        if($r['dita']=='Wednesday'){
                            echo "

                            <td class='mat'>". $r['Emri'] . "</td>";}"</tr>";
                       
                       
                       
                   
                  
                    
                            
                           
             
                    }
                }
                }
            }else{
                    echo("Error description: " . mysqli_error($conn));
                }
                ?>
            
            
        </table>
   
    </div>
</body>
</html>