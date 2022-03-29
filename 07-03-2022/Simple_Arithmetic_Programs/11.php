<?php
echo "Program to calculate the Simple Interest and Compound Interest.";
echo "<br>";
$p = 5000;
$t = 5;
$r = 3;
$simpint = ($p*$r*$t)/100;
echo "Simple Interest is ".$simpint;
echo "<br>";
$amt = $p*pow((1+$r/100),$t);
$compint = $amt-$p;
echo "Compound Interest is " .$compint;
?>