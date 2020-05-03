<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    echo "<html>
<head>
    <title>Prind </title>
</head>
<body>
<h3>Pershendetje prind</h3>
<a href =\"LogOut.php\">LogOut</a>
</body>
</html>";
}
?>
