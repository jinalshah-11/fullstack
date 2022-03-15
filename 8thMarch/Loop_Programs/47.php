<?php
echo "Program to check whether a number is Prime number or not";
echo "<br><br>";
$num = $_POST['first'];  
$cnt = 0;  
for ($i=1; $i<=$num; $i++)  
{  
    if ($num % $i==0)  
    {  
        $cnt++;  
    }  
}  
if ($cnt < 3)  
{  
    echo $num."  is a prime number";  
}
else
{
    echo $num." is not a prime number"; 
}
?>