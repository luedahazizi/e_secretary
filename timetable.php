<?php
include("connection.php");
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

            $orari="Select Emri ,Mesues,ora,dita from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
            $res=$connect->query($orari);
            if($res->num_rows>0){

                while($r=$res->fetch_assoc()){
                    if (isset($_POST['kerko'])) {
                        if($r['dita']='Monday'){
                            echo "<tr>
                        <td>{$r['ora']}</td>
                     
                        <td class='mat'>{$r['Emri']}/<br>{$r['Mesues']}</td>
                        
                       
                   
                       
                    </tr>"


                            ;}
                    }
                }
            }
        }else{
            echo("Error description: " . mysqli_error($connect));
        }
        ?>


    </table>

</div>
</body>
    </html><?php
