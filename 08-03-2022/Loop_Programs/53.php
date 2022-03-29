<?php
$n=$_POST['first'];
$i = 0;
while ($n > 0)
{
    $binary[$i] = $n % 2;
	$n = (int)($n / 2);
	$i++;
}
for ($j = $i - 1; $j >= 0; $j--)
{
    echo $binary[$j];
}
?>
