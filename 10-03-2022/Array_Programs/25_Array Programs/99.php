<label>Program to Read an array and find out how many elements are prime</label>
<?php

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br>";
    $num = sizeof($arr);
	$max_value = max($arr);
	$prime = array_fill(0, $max_value + 1, true);
	$prime[0] = false;
	$prime[1] = false;
	for ($i = 2; $i * $i <= $max_value; $i++)
	{
		if ($prime[$i] == true)
		{
			for ($j= $i * 2;
				$j <= $max_value; $j += $i)
				$prime[$j] = false;
		}
	}
	$cnt = 0;
	for ($j = 0; $j < $n; $j++)
		if ($prime[$arr[$j]])
			$cnt++;

	echo "Total Number of Prime Numbers in this Array : $cnt";

?>