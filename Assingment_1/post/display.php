<html>
<head>
<title> Result</title>
</head>
<body>

<?php
$option=$_POST["opt"];

switch ($option)
{
case "add":
   $result=$_POST["no1"]+$_POST["no2"];
   echo "The Sum is ".$result;
  break;
case "subtract":
  $result=$_POST["no1"]-$_POST["no2"];
  echo "The Subtraction is ".$result;
  break;
case "multiply":
  $result=$_POST["no1"]*$_POST["no2"];
  echo "The Multiplication is".$result;
  break;
case "divide":
  $result=$_POST["no1"]/$_POST["no2"];
  echo "The Division is".$result;
  break;
} 

?>


</body>
</html> 