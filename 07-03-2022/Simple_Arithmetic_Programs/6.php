<?php
echo"Program to calculate the percentage of a student while marks of 5 subjects are given.";
echo "<br>";
$s1=75;
$s2=80;
$s3=90;
$s4=85;
$s5=95;
$tot=($s1+$s2+$s3+$s4+$s5);
echo "Total Marks " .$tot;
echo "<br>";
$per= ($tot/500)*100;
echo "Percentage " .$per;
?>