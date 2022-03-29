<?php
echo "Program to find largest / smallest number among three numbers.";
echo "<br>";
$a=15;
$b=20;
$c=25;
    if($a>=$b && $a>=$c)
    {
        echo "The Largest number is " .$a; 
    }
    else if($b>=$a && $b>=$c)
    {
        echo "The Largest number is " .$b;
    }
    else
    {
        echo "The Largest number is " .$c;
    }
?>