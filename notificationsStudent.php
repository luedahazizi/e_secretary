<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    if($_SESSION['role']=='nxenes') {
        echo "<html>
<head>
<title>Notifications</title>
<style>
body{
				background-image: url(\"https://i.pinimg.com/564x/a7/70/13/a77013e286870cf305d06dd494ff4e37.jpg\");
				background-repeat: no-repeat;
				background-size: 50%;
				}
				#titull{
				position: relative;
				text-align: center;
				}
				#notification{
				position: relative;
				left: 375px;
				border-width: 1px;
				border-color: midnightblue;
				border-style: solid;
				width:600px;
				}
				img{
				position: relative;
				left:50px;
				}
				#data{
				position: relative;
				alignment: right;
				font-size: 15px;
				color: darkslategray;
				
				}
				#content{
				position: relative;
				text-align: center;
				}
				#link{
				
				position: relative;
				left:200px;
				}
				#click{
				position: relative;
				left:150px;
				}
</style>
</head>
<body><div id='titull'>
<h1>Notifications</h1>
<h4>Here you can find publications and notifications that we post for activities,meetings,exams and more</h4></div>";
        $query = "SELECT titull,permbajtja,lloji,data,Attachments FROM publikime  order by data desc ";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            $adresa = "http:\\e_secretary\\uploads\\" . $row["Attachments"];
            $lloj = substr($adresa, -3);

            if ($lloj == 'jpg' || $lloj == 'gif' || $lloj == 'tif' || $lloj == 'png') {
                echo "<div id='notification'><h4 id='Data'><i>Date: ";
                Echo $row["data"];
                echo "</i></h4><h3 id='titull'>";
                echo $row["titull"];
                echo "</h3>
            <a href='" . $adresa . "' download>    <img src='" . $adresa . "' style='height: 300px; width: 500px'></a>
                        <h4 id='content'>Content:";
                echo $row["permbajtja"];
                echo "</h4>
       </div><br>";

            } else {
                echo "<div id='notification'><h4 id='Data'><i>Date: ";
                Echo $row["data"];
                echo "</i></h4><h3 id='titull'>";
                echo $row["titull"];
                echo "</h3> <h4 id='click'>Click over the arrow to download the file:</h4>
            <a href='" . $adresa . "' download id='link'><img src='https://cdn.windowsreport.com/wp-content/uploads/2019/04/download-Windows-10-v1809-ISO-files.png'
             width='100px' height='100px'></a>
                        <h4 id='content'>Content:";
                echo $row["permbajtja"];
                echo "</h4>
       </div><br>";
            }
            echo "
</body></html>";
        }
    }
    else{
        header("location:error.html");
    }
}
