<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    echo "<html><head>
</head>
<style>
body{background-image: url(\"https://i.pinimg.com/564x/a7/70/13/a77013e286870cf305d06dd494ff4e37.jpg\");
				background-repeat: no-repeat;
				background-size: 50%;
			}
			table{
			border-collapse: collapse;
			position:relative;
			left:450px;
			top:40px;
			border: solid;
			border-color: #0099e6;
			border-width: 2px;
			font-size: 25px;
			width: 400px;
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
			border-color: #0099e6;
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
  
}
 #filter {
 left:490px;
 position: relative;
 top:50px;
 
 }
 select{
 left:20px;
 position: relative;
 }
 #titull{
				position: relative;
				text-align: center;
				}		
				button:hover{
				color:#0099e6;
				}
</style>
<script>
function Search(){
    var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(\"search\");
  filter = input.value.toUpperCase();
  table = document.getElementById(\"attendance\");
  tr = table.getElementsByTagName(\"tr\");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
   
    td = tr[i].getElementsByTagName(\"td\")[1];
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
 function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(\"attendance\");
  switching = true;
  
  while (switching) {
   
    switching = false;
    rows = table.rows;
   
    for (i = 1; i < (rows.length - 1); i++) {
     
      shouldSwitch = false;
  
      x = rows[i].getElementsByTagName(\"TD\")[0];
      y = rows[i + 1].getElementsByTagName(\"TD\")[0];
    
      if (Number(x.innerHTML) < Number(y.innerHTML)) {
       
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
 
  
 
</script>
</head>
<body>
<div id='titull'><h1>Attendance</h1><h4>Here you can find a list of absences linked with the subject name and date </h4></div>
<div id='filter'>
<input type='text' id='search' onkeyup='Search()' placeholder='Search ...'>
<button onclick='sortTable()'>show oldest first</button>
</div>
<br>
";

    $emer = $_SESSION['emer'];
    $mbiemer = $_SESSION['mbiemer'];

    $query = "Select mungesat.mungesaID,  lenda.emri,mungesat.data from user
Inner join mungesat on mungesat.NxenesId = user.userid
Inner join lenda on lenda.lendaId = mungesat.lendaid
Where user.userid=(select userID from User where emer='$emer' and mbiemer='$mbiemer')
  order by  data desc" ;

    $result = mysqli_query($connect, $query);



     echo "<table id='attendance'>
<th style='display: none'>ID</th>
<th>Subject</th>
<th>Date</th>
<tr>";
        while ($row = mysqli_fetch_array($result)) {

            echo"<td style='display: none'>";
            echo $row['mungesaID'];
            echo" <td>";
            echo $row['emri'];
            echo"</td> <td>";
            echo $row['data'];
            echo"</td>
         </tr>";
        };

        echo "</table></body></html>";



    }
