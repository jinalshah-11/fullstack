<label>Program to Read two array of same dimension and swap their elements</label>
<?php
    $arr1 = array(65, 89, 11, 36, 07);
    $arr2 = array(18, 94, 78, 67, 27);
    $num1 = sizeof($arr1);
    $num2 = sizeof($arr2);
    echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br><br>";
    echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br>";
    for($i = 0; $i < $num1; $i++)
    {
        $arr1[$i] = $arr1[$i] + $arr2[$i];
        $arr2[$i] = $arr1[$i] - $arr2[$i];
        $arr1[$i] = $arr1[$i] - $arr2[$i];
    }
    for($i = 0; $i < $num1; $i++)
    {
        $arr1[$i];
    }
    echo "First Array after Swapping elements :- ";
    echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br><br>";    
    for($i = 0; $i < $num2; $i++)
    {
        $arr2[$i];
    }
    echo "Second Array after Swapping elements :- ";
    echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br><br>";
?>