<label>Program to Read a 2D array and find out maximum among each row</label>
<?php
    $arr = array(
        array(11, 07, 38),
        array(48, 53, 69),
        array(27, 87, 89));
    $m = count($arr);
    $num = count($arr[0]);
    echo "The Matrix :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $num; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br/>";
    }
    $i = 0; $j;
    $max = 0;
    while ($i < $m)
    {
       for ( $j = 0; $j < $num; $j++)
       {
           if ($arr[$i][$j] > $max)
           {
              $max = $arr[$i][$j];
           }
        }
        $max1[$i] = $max;
        $max = 0;
        $i++;
    }
    for($i = 0; $i < $num; $i++)
    {
       printf("Largest element in row index %d is %d", $i, $max1[$i]);
       echo "<br/>";
    }
?>