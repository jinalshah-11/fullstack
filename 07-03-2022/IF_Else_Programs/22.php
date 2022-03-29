<?php  
echo "Program to check whether a 3-digit number is Armstrong or not.";
echo "<br>";
    $num=153;  
    $tot=0;  
    $x=$num;  
    while($x!=0)  
    {  
        $rem=$x%10;  
        $tot=$tot+$rem*$rem*$rem;  
        $x=$x/10;  
    }  
        if($num==$tot)  
        {  
            echo "Yes it is an Armstrong number";  
        }  
        else  
        {  
            echo "No it is not an armstrong number";  
        }  
?>  