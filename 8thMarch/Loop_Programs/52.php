<?php
echo"Program to compute Square root using Iteration (without using sqrt( ) library function).";
echo"<br><br>";
$num=$_POST['first'];
$sqrt;
$sqrt=$num/2;
$temp=0;
while($sqrt!=$temp){
    $temp=$sqrt;
    $sqrt=($num/$temp+$temp)/2;
}
echo "SquareRoot of " .$num." is ".$sqrt;
?>