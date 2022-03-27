<label>Program to Read an array and print sum of elements stored at even indexes</label>
<?php
    $arr = array( 96, 52, 78, 65, 07, 11 );
    echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br>";
    $num = sizeof($arr);
    $evennum = 0;
    for ($i = 0; $i < $n; $i++)
    {
        if ($i % 2 == 0)
            $evennum += $arr[$i];
    }
    echo "Sum of Even Index Positions : $evennum";
?>