<?php
session_start();
?>
<html>
<head>
<title>REDIRECTED</title>
</head>
<body>
<?php

$user=$_SESSION["user"];

echo "Session Variable is accessible on all pages of website " .$user."<br>";
?>
<a href="logout.php">Click here to Logout</a> 

</body> 
</html>
