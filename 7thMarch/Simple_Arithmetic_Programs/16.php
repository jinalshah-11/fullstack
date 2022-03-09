<?php 
echo "Program to reverse a 4-digit number.";
echo "<br>"; 
$num = 589714;   
while ($num > 1)  
{  
    $rem = $num % 10; 
    $rev = ($rev * 10) + $rem;  
    $num = ($num / 10);   
}  
echo "Reverse number of 589714 is: $rev";  
?>  