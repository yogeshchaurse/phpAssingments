<html>
<head>
<title>Home</title>
</head>
<body>
 <?php
  if (isset($_COOKIE["user"]))
  {
  	//For Returning user
   echo "Welcome " . $_COOKIE["user"] . "!<br>";
  }
 else
  {
  	//for first Time user
  	setcookie ("user",$_POST["unm"], time()+3600);
  	echo "Welcome First time to this page ".$_POST["unm"];

  }
   
 ?>
 <a href="logout.php">Click Here To Logout</a> 

</body> 
</html>
