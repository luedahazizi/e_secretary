<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
echo "<html>
<body>
<h2>
Personal Information
</h2>
<h3>Name Surname: </h3>
" ;
echo $_SESSION['emer'] . " " . $_SESSION['mbiemer'];

echo " <h2>Email Adress</h2>";
echo $_SESSION['email'];
echo "<h3>Username:</h3>";
echo $_SESSION['username'];
echo"<h3> Telephone:</h3>";
echo $_SESSION['telefon'];
echo"
</body>
</html>
";
}