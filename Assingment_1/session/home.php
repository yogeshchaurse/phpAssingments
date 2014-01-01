<?php
session_start();
?>
<html>
<head>
<title>Home</title>
</head>
<body>
 <?php
 
$_SESSION["user"]=$_POST["unm"];
echo "Welcome " .$_SESSION['user']."<br>";
?>
<a href="nextpage.php">Redirect to next Page</a> 
</body> 
</html>
