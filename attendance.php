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
body{
				background-image: url(\"https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg\");
				background-repeat: no-repeat;
				background-size: 100%;
			}
			table{
			border-collapse: collapse;
			position:relative;
			left:450px;
			top:50px;
			border: solid;
			border-color: rgb(37, 87, 95);
			border-width: 2px;
			font-size: 25px;
			width: 400px;
			}
			th{
			font-size: 28px;
			border: solid;
			border-color: rgb(37, 87, 95);
			}
			tr{
			border: solid;
			border-color: rgb(37, 87, 95);
		
			
			}
			
			td{
			border: solid;
			border-color: rgb(37, 87, 95);
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
 top:40px;
 
 }
 select{
 left:20px;
 position: relative;
 }
 #button:hover{
 color:rgb(37, 87, 95);
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
<div id='titull'><h1>Attendance</h1><h4>Here you can find a list of absences linked with the subject name and date of your child</h4></div>
<div id='filter'>
<input type='text' id='search' onkeyup='Search()' placeholder='Search ...'>
<button onclick='sortTable()'>show oldest first</button>
</div>
<br>
";

    $emerPrindi = $_SESSION['emer'];
    $mbiemerPrindi = $_SESSION['mbiemer'];

    $query = "Select mungesat.mungesaID, user.emer, user.mbiemer, lenda.emri,mungesat.data from user
Inner join mungesat on mungesat.NxenesId = user.userid
Inner join lenda on lenda.lendaId = mungesat.lendaid
Where user.userid in (SELECT nx.userID from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer = '$emerPrindi' and p.Mbiemer ='$mbiemerPrindi' ) 
  order by  data desc" ;

    $result = mysqli_query($connect, $query);

    $gjejFemije="SELECT nx.userID from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer = '$emerPrindi' and p.Mbiemer ='$mbiemerPrindi' ";
    $result1=mysqli_query($connect,$gjejFemije);

    if(mysqli_num_rows($result1)>1){ echo "<table id='attendance'>
<th style='display: none'>ID</th>
<th>Name</th>
<th>Subject</th>
<th>Date</th>
<tr>";
        while ($row = mysqli_fetch_array($result)) {

            echo"<td style='display: none'>";
            echo $row['mungesaID'];
            echo"</td><td>" ;
            echo $row['emer']." ".$row['mbiemer'] ;
            echo "</td> <td>";
            echo $row['emri'];
            echo"</td> <td>";
            echo $row['data'];
            echo"</td>
         </tr>";
        };

        echo "</table></body></html>";



    }
    else {
        echo" <table id='attendance'><th>Subject</th>
<th>Date</th>
<tr>
 ";
    }
    while ($row = mysqli_fetch_array($result)) {

        echo"<td>";
        echo $row['emri'];
        echo"</td> <td>";
        echo $row['data'];
        echo"</td>
         </tr>";
    };

    echo "</table></body></html>";
}