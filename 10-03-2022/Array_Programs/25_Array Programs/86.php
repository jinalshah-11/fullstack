<label>Program to Read an array and print its reverse</label>
<?php
    $arr = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br>";
    echo "<br><br>Original Array : ". implode(" ",$arr);
    $len = count($arr);
    for($i=0; $i<$len/2; $i++)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$len-$i-1];
        $arr[$len-$i-1] = $temp;
    }
    echo "<br><br>Reverse Array : ".implode(" ",$arr);

?>