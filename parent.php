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
    margin-left: 23%;
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
.btn_add{
  background-color:rgb(121, 174, 182);
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 15px;
    border: ghostwhite;
    }
</style>
<script type="text/javascript">
function Search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchteacher");
  filter = input.value.toUpperCase();
  table = document.getElementById("parent");
  tr = table.getElementsByTagName('tr');
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName('td')[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    
</head>
<body>
<?php

include "homepage.php";
?>
<div class="tbox">
<h1  style="margin-top:10px; margin-left:53%; margin-bottom:4px;font-size:40px;">Parent</h1><hr>
            <h3 style="margin-top:10px; margin-left:23%; margin-bottom:4px;"> Parent Details<a  href='registerparent.php?submit={$r["userID"]}' class='btn_add'>Add</a><input style="margin-top:10px; margin-left:50%; margin-bottom:4px;" type='text' id="searchteacher" onkeyup="Search()" placeholder='Search ...'></h3><br>
            <?php
            if(isset($_GET["mes"]))
            {
                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
            ?>
            <table id=parent border="3px">
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
                    
                    <th colspan="2">Action</th>
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