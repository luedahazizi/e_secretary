<?php
require_once('config.php');
include('editparent.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Parent</title>
    <link rel="stylesheet" href="subjects.css">
    <style>.btn_delete{
  background-color: #e5e778;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 10px;
    border: ghostwhite;
}
.btn_update{
  background-color:rgb(121, 174, 182);
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 10px;
    border: ghostwhite;
    }
    .tbox table{
    border-collapse:collapse;
    border-color: rgb(121, 174, 182);
    margin-left: 20%;
    background: rgb(237, 247, 247);
}
tr,td,th{
  padding:10px;
 
}
.success{
	background:rgb(0, 128, 102);
	color:white;
	line-height:30px;
	border-radius:5px;
	height:30px;
	
	text-align:center;
	margin-bottom:10px;
	
}
.error{
	background:#e5e778;
	color:white;
	line-height:30px;
	border-radius:5px;
    height:30px;
    margin-left: 30px;
	text-align:center;
	margin-bottom:10px;
}
</style>
    
</head>
<body>
<?php

include "homepage.php";
?>
<div class="tbox">
            <h3 style="margin-top:30px;"> Student Details</h3><br>
            <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
            ?>
            <table border="3px">
                <tr>
                <th>Nr.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Graduation</th>
                    <th>Status</th>
                    <th>Profesion</th>
                    
                    <th colspan="3">Action</th>
                </tr>
                <?php
                $parent="select * FROM  user u join prindi p on u.userID=p.PrindID";
                $res=$conn->query($parent);
                if($res->num_rows>0){
                    $i=0;
                    while($r=$res->fetch_assoc()){
                        $i++;
                        echo "<tr>
                        <td>{$i}</td>
                        <td>{$r["userID"]}</td>
                        <td>{$r["Emer"]}</td>
                        <td>{$r['Mbiemer']}</td>
                        <td>{$r['Username']}</td>
                        <td>{$r['Email']}</td>
                        <td>{$r['Telefon']}</td>
                        <td>{$r['Arsimi']}</td>
                        <td>{$r['Status']}</td>
                        <td>{$r['Profesioni']}</td>

                        
                        <td><a href='editparent.php?id={$r["userID"]}' class='btn_delete'>Delete</td>
                        <td><a href='registerparent.php?edit={$r["userID"]}' class='btn_update'>Update</td>
                        <td><a href='registerparent.php?submit={$r["userID"]}' class='btn_update'>Add</td>
                        </tr>";
                    }
                }
                else{
                    echo("Error description: " . mysqli_error($conn));
                }
                ?>
               
        </table>
    </div>
</body>
</html>