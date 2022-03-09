<?php
echo "Program to calculate Maximum / Minimum/ Second Maximum out of 4 numbers
(Using ? : Operator)";
echo "<br>";
$num1=80;
$num2=50;
$num3=10;
$num4=40;

$maximum = ($num1 > $num2 && $num1 > $num3 && $num1 > $num4)
? $num1 : (($num2 > $num3 && $num2 > $num4) 
? $num2 : ($num3 > $num4 
? $num3 : $num4));
echo "Maximum Number is " .$maximum;
echo "<br>";

$minimum=($num1 < $num2 && $num1 < $num3 && $num1 < $num4)
? $num1 : (($num2 < $num3 && $num2 < $num4) 
? $num2 : ($num3 < $num4 
? $num3 : $num4));
echo "Minimum Number is " .$minimum;
?>