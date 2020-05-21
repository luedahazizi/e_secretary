<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
echo"<html>
<head>
<title>Notifications</title>
<style>
body{
				background-image: url(\"https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg\");
				background-repeat: no-repeat;
				background-size: 100%;
				}
				#titull{
				position: relative;
				text-align: center;
				}
</style>
</head>
<body><div id='titull'>
<h1>Notifications</h1>
<h4>Here you can find publications and notifications that we post for activities,meetings,exams and more</h4></div>";
    $query = "SELECT titull,permbajtja,lloji,data,Attachments FROM publikime ";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<div><h4>Date: ";
        Echo $row['data'];
    echo"</h4><h3>";
    echo $row['titull'];
    echo"</h3><h4>Content:";
    echo $row['permbajtja'];
    echo"</h4><script>

</script></div>";

    }

echo"
</body></html>";
}
