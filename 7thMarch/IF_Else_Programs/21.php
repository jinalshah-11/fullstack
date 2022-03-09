<?php
echo "Program to check whether a 4-digit number is Palindrome or not.";
echo "<br>";
$num=1331;
$rev = 0;
$n1 = $num;
    while($n1 > 0) 
    {
        $d = $n1 % 10;
        $rev = $rev * 10 + $d;
        $n1 = (int)($n1 / 10);
    }
    if ($num == $rev)
    {
        echo $num." is a Palindrome number";
        echo "<br>";
    }
    else 
    {
        echo $num." is not a Palindrome number";
    }
?>