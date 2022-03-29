<?php
echo "Program to check whether a number is a 4-digit number or not.";
echo "<br>";
$num=1107;
$cnt=0;
while($num!=0)
{
    $num=round($num/10);
    ++$cnt;
}
if($cnt==4)
{
    echo "Yes is a 4 Digit Number";
}
else
{
    echo "No is not a 4 Digit Number";
}
?>