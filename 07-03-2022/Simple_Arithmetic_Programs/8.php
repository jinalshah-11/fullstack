<?php
echo "Program to calculate the perimeter and area of a triangle when sides are given.";
echo "<br>";
$a=12;
$b=10;
$c=15;
$peri=$a+$b+$c;
echo "Perimeter of a Triangle is " .$peri;
echo "<br>";
$s=($peri/2);
$area=sqrt($s*($s-$a)*($s-$b)*($s-$c));
echo "Area of a Triangle is " .$area;
?>