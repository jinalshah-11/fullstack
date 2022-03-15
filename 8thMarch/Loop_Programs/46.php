<?php
echo "Program to find second largest among n numbers.";
echo "<br>";
$num = array(11,7,27,1107,18,321,758);
$max = $num[0];
for($i=1; $i<count($num); $i++)
{
	if($num[$i] > $max)
    {
		$smax = $max;
		$max = $num[$i];
	}
    else if($smax < $num[$i] && $smax < $max)
    {
		$smax = $num[$i];
	}
}
echo $smax;
?>