<?php  
$num = $_POST['first'];  
$rev = 0; 
echo "Number entered is " .$num; 
echo "<br>";
while ($num > 1)  
{  
    $rem = $num % 10;  
    $rev = ($rev * 10) + $rem;  
    $num = ($num / 10);   
} 
echo "Reverse number of is: ".$rev;
echo "<br><br>";
$r1=0;  
$sum=0;  
$num1=$_POST['second'];
echo "Number entered is " .$num1;
echo "<br>";
for ($i=0; $i<=strlen($num1);$i++)  
{  
    $r1 = $num1 % 10;  
    $sum = $sum + $r1;  
    $num1 = $num1/10;  
}  
echo "Sum of digits is: ".$sum;  
?>  