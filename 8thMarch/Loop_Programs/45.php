<?php
echo "Program to find largest / smallest among n numbers.";
echo "<br>";
$arr = [11,7,18,652,58,35];
$large = $arr[0];
for ($i = 1; $i < count($arr); $i++)
{
    if ($large < $arr[$i])
    {
        $large = $arr[$i];
    }
}
echo "The largest element is: ".$large;
echo "<br>" ;

$small = $arr[0];
for ($i = 1; $i < count($arr); $i++)
{
    if ($small > $arr[$i])
    {
        $small = $arr[$i];
    }
}
echo "The smallest element is: ".$small;
?>