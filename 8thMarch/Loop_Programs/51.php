<?php 
$num = 0;  
$n1 = $_POST['first'];  
$n2 = $_POST['second'];  
echo "Fibonacci series: ";    
echo $n1.' '.$n2.' ';  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?>  