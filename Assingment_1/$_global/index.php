<html>
<head>
<title>Result</title>
</head>
<body>
<?php
$a=50;
$b=23;
function add()  
{  

$GLOBALS['sum'] = $GLOBALS['a']+$GLOBALS['b'];
} 
add();
echo "The value of global variable is ".$sum;
?>
</form>

</body>
</html>