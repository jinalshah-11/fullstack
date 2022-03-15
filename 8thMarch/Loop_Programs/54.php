<?php
echo "Program to input a number in Base ‘x’ and print it in Base ‘y’.";
echo "<br><br>";
$num=$_POST['first'];
$bx=$_POST['x'];
$by=$_POST['y'];
echo"Converting $num from base $bx to base $by ";
echo"<br><br>";

$base=base_convert($num,$bx,$by);
echo "number converted to base $by : ".$base;


?>