<?php
$n1=$_POST['first'];
$n2=$_POST['second'];

for($i=1;$i<= $n1 && $i<=$n2;$i++)
{
    if($n1%$i==0 and $n2%$i==0)
    {  
        $gcd=$i;
    }
}
echo "GCD of ".$n1. " and " .$n2. " is " .$gcd;
?>