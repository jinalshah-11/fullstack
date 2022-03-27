<label>Program to Read two array of same dimension and swap their elements index by index into third</label>
<?php
        $arr1 = array(65, 89, 11, 36, 07);
        $arr2 = array(18, 94, 78, 67, 27);
        $num1 = sizeof($arr1);
        $num2 = sizeof($arr2);
        echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br><br>";
        echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br><br>";
        $i = 0; 
        $j = 0;
        $k = 0;
        $arr3 = array();
        while ($i < $num1 && $j < $num2)
        {
            $arr3[$k++] = $arr1[$i++];
            $arr3[$k++] = $arr2[$j++];
        }
        for ($i = 0; $i < ($num1 + $num2); $i++)
        {
            $arr3[$i];
        }
        echo "Array 3 After Merging of Array 1 and Array 2 : ";
        echo "[ ",implode(", ",$arr3)," ]"."<br>";
?>