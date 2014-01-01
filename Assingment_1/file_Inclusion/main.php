<html>
<head>
<title> File Inclusion </title>
<body>
<?php
include 'sum.php';
include 'avg.php';
include 'percentage.php';

$total_sum=sum(70,60,80);
echo "Sum of Marks is" .$total_sum."<br>";
$average=average($total_sum,3);
echo "Average of Marks is" .$average."<br>";
$per=percentage($total_sum,300);
echo "Percentage of Marks is" .$per."<br>";
?>
</body>
</head>
</html>