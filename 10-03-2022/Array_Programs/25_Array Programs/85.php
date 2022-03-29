<label>Program to Read an array and Print Sum of its Elements</label>
<?php
    $arr = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br/>";
    $sum = 0; 
    for($i = 1; $i < count($arr); $i++)
    {
        $sum = $sum + $arr[$i];
    }
    echo "<br/> Sum of an Array : $sum";
?>