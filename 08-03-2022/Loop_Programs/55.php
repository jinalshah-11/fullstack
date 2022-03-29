<?php
echo "Program to print the sum of all the even and odd between two given numbers";
echo "<br><br>";
$sum=0;
$sum1=0;
$n1=$_POST['first'];
$n2=$_POST['second'];
for($i=$n1;$i<=$n2;$i++)
{
    if($i%2==0)
    {
        $sum+=$i;
    }
    else
    {
        $sum1+=$i;
    }
}
echo "Sum of Even Numbers between " .$n1. " and " .$n2. " is " .$sum;
echo "<br><br>";
echo "Sum of Odd Numbers between " .$n1. " and " .$n2. " is " .$sum1;
echo "<br><br>";
?>