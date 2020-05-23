<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
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
			left:410px;
			top:40px;
			border: solid;
			border-color:#0099e6;
			border-width: 2px;
			font-size: 25px;
			width: 600px;
			}
			th{
			font-size: 28px;
			border: solid;
			border-color:#0099e6;
			
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
  left: 520px;
  top:20px;
 
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
  table = document.getElementById(\"marks\");
  tr = table.getElementsByTagName(\"tr\");
  // Loop through all table rows, and hide those who don't match the search query
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
<div id='titull'><h1>Marks</h1><h4>Here you can find a list of marks linked with the subject name and some more information  </h4></div>
<input type='text' id='search' onkeyup='Search()' placeholder='Search..'>
<br/>
";
    $emer = $_SESSION['emer'];
    $mbiemer = $_SESSION['mbiemer'];

    $query = " select lenda.Emri,notat.Vleresimi,notat.Pershkrimi 
  from notat  join lenda on notat.LendaID=lenda.LendaID join user on user.userID=notat.NxenesID where NxenesID =(select userid from user 
   where emer='$emer' and mbiemer='$mbiemer')";


    $result = mysqli_query($connect, $query);



        echo "<table id='marks'>

<th>Subject</th>
<th>Mark</th>
<th>Description</th>
<th>Status</th>
<tr>";


        while ($row = mysqli_fetch_array($result)) {

            echo "
 
 <td >";
            echo $row['Emri'];
            echo "</td>
 <td >";
            echo $row['Vleresimi'];
            echo "</td>
 <td >";
            echo $row['Pershkrimi'];
            echo "
 </td>
 <td>";
            if ($row['Vleresimi'] > 4) {
                echo "Passed";
            } else {
                echo "Failed";
            }
            echo "</td> </tr>";
        }

        echo "</table></body></html>";
    }
