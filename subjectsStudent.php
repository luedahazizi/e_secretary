<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else { if($_SESSION['role']=='nxenes') {
    echo "<html>
<head>
<style>
body{
				background-image: url(\"https://i.pinimg.com/564x/a7/70/13/a77013e286870cf305d06dd494ff4e37.jpg\");
				background-repeat: no-repeat;
				background-size: 50%;

			}
			table{
			border-collapse: collapse;
			position:relative;
			left:300px;
			top:80px;
			border: solid;
			border-color:#0099e6 ;
			border-width: 3px;
			font-size: 25px;
			width: 700px;
			}
			th{
			font-size: 28px;
			border: solid;
			border-color: #0099e6;
			}
			tr{
			border: solid;
			border-color: #0099e6;
		
			
			}
			td{
			border: solid;
			border-color:#0099e6;
			alignment: center;
			font-size: 20px;
			text-align: center;
			}
			input[type=text] {
  width: 13%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  height: 10px;
  border-radius: 10px;
  position: relative;
  left:400px;
  top: 60px;
  
}
#titull{
				position: relative;
				text-align: center;
				}			
</style>
<script>
function Search(){
    var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(\"search\");
  filter = input.value.toUpperCase();
  table = document.getElementById(\"Subjects\");
  tr = table.getElementsByTagName(\"tr\");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName(\"td\")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = \"\";
      } else {
        tr[i].style.display = \"none\";
      }
    }
  }
    }
    


</script>
</head>
<body>
<div id='titull'>
<h1>Subjects</h1>
<h4>Here you can find the subjects your child is going to take this academic year</h4></div>
<input type='text' id='search' onkeyup='Search()' placeholder='Search for subject..'>
<table id='Subjects'>

<th>Subject Name</th>
<th>Teacher </th>
<th>Email</th>

<tr>
";
    $emer = $_SESSION['emer'];
    $mbiemer = $_SESSION['mbiemer'];
    $query = "select l.Emri,u.Emer,u.Mbiemer,u.Email from lenda l join user u on l.MesuesID=u.userID where l.Viti=(SELECT n.Viti FROM
  user u join nxenes n on u.userID=n.NxenesID where u.Emer='$emer' and u.Mbiemer='$mbiemer')";


    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo "
 
 <td >";
        echo $row['Emri'];
        echo "</td>
 <td >";
        echo $row['Emer'] . " " . $row['Mbiemer'];
        echo "</td> <td>";
        echo $row['Email'];
        echo "</td>

         </tr>";
    };
    echo "</table></body></html>";

}
else{
    header("location:error.html");
}
}