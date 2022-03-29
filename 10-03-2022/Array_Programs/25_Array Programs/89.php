<label>Program to Read an array and find out max and min.</label>
<?php
    $array = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$array)," ]"."<br>";
    $n = count($array);
    $max = $array[0];
    $min = $array[0];
    for ($i = 0; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    echo "Maximum Number : $max<br><br>";	
    for ($i = 0; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    echo "Minimum Number : $min";	
?>