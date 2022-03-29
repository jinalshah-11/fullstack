<label>Program to Read a 2D array and print sum of its elements</label>
<?php
    $arr = array(
        array(11, 07, 38),
        array(48, 53, 69),
        array(27, 87, 89));
    $m = count($arr);
    $num = count($arr[0]);
    echo "The Matrix : <br>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $num; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br><br>";
    } 

    for($i = 0; $i < $rows; $i++)
    {  
        $sumrow = 0;  
        for($j = 0; $j < $cols; $j++)
        {  
            $sumrow = $sumrow + $arr[$i][$j];  
        }  
        print("Sum of " . ($i+1) ." row : " . $sumrow);  
        echo "<br>";  
    }  

    for($i = 0; $i < $cols; $i++)
    {  
        $sumcol = 0;  
        for($j = 0; $j < $rows; $j++)
        {  
            $sumcol = $sumcol + $arr[$j][$i];  
        }  
        print("Sum of " . ($i+1) . " column : " . $sumcol);  
        echo "<br><br>"; 
    } 
    $total = $sumrow + $sumcol;
    echo "Sum of 2D Array : $total"; 
?>