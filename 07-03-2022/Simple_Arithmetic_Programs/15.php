<?php
echo "Program to input a 4-digit number and print its entire digits individual.";
echo "<br>";
$num=1107;
echo "4 Digit number is : " .$num;
echo "<br>";
$d1=$num/1000%10;
$d2=$num/100%10;
$d3=$num/10%10;
$d4=$num%10;
echo $d1. "<br>" .$d2. "<br>" .$d3. "<br>" .$d4;
?>