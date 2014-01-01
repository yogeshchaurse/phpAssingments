<?php
$imgErr="";
if(($_FILES["file"]["size"])==0)
{
 $imgErr="Image Required";
}
else
{
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
}
?>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h4 align="center">Registrtion Form</h4>
<form method="post" action="#">

<input type="file" name="img">	<br>
<span class="error"> * <?php echo $imgErr;?></span>
<input type="submit" value="Submit Form">



</form>
</body>
</html>
