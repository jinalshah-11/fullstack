<label>Program to Read a 2D array and find out maximum among its diagonal elements</label>
<?php
    $arr = array(
        array(11, 07, 38),
        array(48, 53, 69),
        array(27, 87, 89));
    $m = count($arr);
    $num = count($arr[0]);
    echo "The Matrix :<br>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $num; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br>";
    }
	$max = $arr[0][0];
	for ($i = 1; $i < $num; $i++)
	{
		for ($j = 1; $j < $num; $j++)
		{
			if ($i == $j)
			{
				if ($arr[$i][$j] > $max)
				{
					$max = $arr[$i][$j];
				}
			}
		}
	}
	echo "Diagonal Greatest Element : $max";
?>