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
    <style>
        .timatable {
  margin-left:0%;
  display: inline-block;
  position: absolute;
  margin-bottom: auto;
  padding: 20px;
}
.timatable5 {
  margin-left:4%;
  display: inline-block;
  position: absolute;
  margin-bottom: auto;
 
}
.timatable1 {
  margin-left: 14%;
  display: inline-block;
  position: absolute;
  margin-bottom: auto;
}
.timatable2 {
  margin-left: 24%;
  display: inline-table;
  position: absolute;
  margin-bottom: auto;
}
.timatable3 {
  margin-left: 35%;
  display: inline-table;
  position: absolute;
  margin-bottom: auto;
}
.timatable4 {
  margin-left: 44%;
  display: inline-table;
  position: absolute;
  margin-bottom: auto;
}
.timatable table{
  display: inline-block;

}
.timatable1 table{
 
  display: inline-block;
}
.timatable2 table{
 
  display: inline-block;
}
.timatable3 table{
 
  display: inline-block;
}
.timatable4 table{
  display: inline-block;
}
.search{
  margin-left: 22%;
  display: inline-block;
  margin-top: 1%;
  
}
.input1{
  height: 10px;
  width: 70%;
  padding: 5px 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn_tbl {
  background-color:  rgb(37, 87, 95);
    color: white;
    padding: 8px 30px;
    margin-top: 5%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 15px;
    border: ghostwhite;
}
.mat{
  background: rgb(216, 180, 198);
  border-radius: 5px;
 
  

}
.let{
  background: rgb(176, 220, 218);
  border-radius: 5px;
 
}
.fiz{
  background: rgb(168, 160, 225);
  border-radius: 5px;
  padding:  10px;
  
}
.hist{
  color: rgb(167, 107, 107);
  border-radius: 5px;
  padding:  10px;
  
  
}
.fisk{
  background: rgb(219, 177, 235);
  border-radius: 5px;
  padding:  10px;
  
}
.bio{
  background: rgb(231, 121, 127);
  border-radius: 5px;
  padding:  10px;
  
}
.gjeo{
  background: rgb(127, 236, 198);
  border-radius: 5px;
  padding:  10px;
}
.kim{
  background: rgb(232, 247, 198);
  border-radius: 5px;
 
}
    </style>
</head>

<body>
    <?php
    include "timetable1.php";
    ?>
    <div class="search">
        <form action="timetable.php" method="post">
            <label for="">Year</label><br>
            <input type="text" name='viti' class="input1" list="viti" required><br>
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
        <table>
            <tr>
                <td></td>
            </tr>
            <tr>

<td>8:00</td>

</tr>
<tr>
                <td>9:00</td>
            </tr>
            <tr>
                <td>10:00</td>
            </tr>
            <tr>
                <td>11:00</td>
            </tr>
            <tr>
                <td>12:00</td>
            </tr>
            <tr>
                <td>01:00</td>
            </tr>
        </table>
    </div>
    <div class="timatable5">


        <table>
            <tr>
                <th></th>
                <th>Monday</th>


            </tr>




            <?php
            if (isset($_POST['viti']) && isset($_POST['paraleli'])) {
                $viti = $_POST['viti'];
                $paraleli = $_POST['paraleli'];

                $orari = "Select Emri ,dita,ora from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res = $conn->query($orari);
                if ($res->num_rows > 0) {


                    while ($r = $res->fetch_assoc()) {
                        if (isset($_POST['kerko'])) {

                            echo "<tr> ";
                            if (($r['dita'] == 'Monday') && ($r['ora'] == $r['ora'])) {
                                echo "
                               <td></td>
                                <td class='mat'>" . $r['Emri'] . "</td>";
                            } else {
                                " <td></td>";
                            }
                        }


                        " </tr>";
                    }
                }
            } else {
                //echo ("Error description: " . mysqli_error($conn));
            }
            ?>


        </table>
    </div>
    <div class="timatable1">
        <table>
            <tr>
                <th></th>

                <th>Tuesday</th>


            </tr>


            <?php
            if (isset($_POST['viti']) && isset($_POST['paraleli'])) {
                $viti = $_POST['viti'];
                $paraleli = $_POST['paraleli'];

                $orari = "Select Emri ,dita,ora from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res = $conn->query($orari);
                if ($res->num_rows > 0) {


                    while ($r = $res->fetch_assoc()) {
                        if (isset($_POST['kerko'])) {

                            echo "<tr> ";

                            if (($r['dita'] == 'Tuesday')) {
                                echo "
                                <td></td>  
                            <td class='let'>" . $r['Emri'] . "</td>";
                            } else {
                                " <td></td>";
                            }


                            " </tr>";
                        }
                    }
                }
            } else {
                //echo ("Error description: " . mysqli_error($conn));
            }
            ?>


        </table>
    </div>
    <div class="timatable2">
        <table>
            <tr>
                <th></th>

                <th>Wednesday</th>


            </tr>


            <?php
            if (isset($_POST['viti']) && isset($_POST['paraleli'])) {
                $viti = $_POST['viti'];
                $paraleli = $_POST['paraleli'];

                $orari = "Select Emri ,dita from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res = $conn->query($orari);
                if ($res->num_rows > 0) {


                    while ($r = $res->fetch_assoc()) {
                        if (isset($_POST['kerko'])) {

                            echo "<tr> ";

                            if (($r['dita'] == 'Wednesday')) {
                                echo "
                       <td></td>
                        <td class='kim'>" . $r['Emri'] . "</td>";
                            } else {
                                " <td></td>";
                            }


                            " </tr>";
                        }
                    }
                }
            } else {
                //echo ("Error description: " . mysqli_error($conn));
            }
            ?>


        </table>
    </div>
    <div class="timatable3">
        <table>
            <tr>
                <th></th>

                <th>Thursday</th>


            </tr>


            <?php
            if (isset($_POST['viti']) && isset($_POST['paraleli'])) {
                $viti = $_POST['viti'];
                $paraleli = $_POST['paraleli'];

                $orari = "Select Emri ,dita from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res = $conn->query($orari);
                if ($res->num_rows > 0) {


                    while ($r = $res->fetch_assoc()) {
                        if (isset($_POST['kerko'])) {

                            echo "<tr> ";

                            if (($r['dita'] == 'Thursday')) {
                                echo "
                   <td></td>
                    <td class='mat'>" . $r['Emri'] . "</td>";
                            } else {
                                " <td></td>";
                            }


                            " </tr>";
                        }
                    }
                }
            } else {
                //echo ("Error description: " . mysqli_error($conn));
            }
            ?>


        </table>


    </div>
    <div class="timatable4">
        <table>
            <tr>
                <th></th>

                <th>Friday</th>


            </tr>


            <?php
            if (isset($_POST['viti']) && isset($_POST['paraleli'])) {
                $viti = $_POST['viti'];
                $paraleli = $_POST['paraleli'];

                $orari = "Select Emri ,dita from lenda l join orari o on l.LendaID=o.LendaID where  o.viti=$viti and o.paraleli='$paraleli'";
                $res = $conn->query($orari);
                if ($res->num_rows > 0) {


                    while ($r = $res->fetch_assoc()) {
                        if (isset($_POST['kerko'])) {

                            echo "<tr> ";

                            if (($r['dita'] == 'Friday')) {
                                echo "
                   <td></td>
                    <td class='fiz'>" . $r['Emri'] . "</td>";
                            } else {
                                " <td></td>";
                            }


                            " </tr>";
                        }
                    }
                }
            } else {
                //echo ("Error description: " . mysqli_error($conn));
            }
            ?>


        </table>


    </div>
</body>

</html>