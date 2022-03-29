<?php
echo "Program to check whether a number is Palindrome or not.";
echo "<br><br>";
$num=$_POST['first'];
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