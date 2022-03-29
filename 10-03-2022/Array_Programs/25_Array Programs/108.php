<label>Program to Read a 2D array and swap their elements</label>
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
	for ($i = 0; $i < $num; $i++)
	{
		$t = $arr[0][$i];
		$arr[0][$i] = $arr[$rows - 1][$i];
		$arr[$rows - 1][$i] = $t;
	}
    echo "Swap Element:<br>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $num; $cols++)
            echo " ".$arr[$rows][$cols];
            echo "<br>";
    }
?>