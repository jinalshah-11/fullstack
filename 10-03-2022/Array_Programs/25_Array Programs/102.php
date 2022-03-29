<label>Program to Read a 2D array and print sum of its individual columns</label> 
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
        echo "<br/>";
    }
    for($i = 0; $i < $cols; $i++)
    {  
        $sumcol = 0;  
        for($j = 0; $j < $rows; $j++)
        {  
            $sumcol = $sumcol + $arr[$j][$i];  
        }  
        print("Sum of " . ($i+1) . " column : " . $sumcol);  
        echo "<br>";  
    } 
?>