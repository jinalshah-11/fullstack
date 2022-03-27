<label>Program to Input two arrays and then put them into another (3rd array) After Sorting.</label>
<?php
        $arr1 = array(11,07,29,98);
        $arr2 = array(56,87,45,39);
        $num1 = sizeof($arr1);
        $num2 = sizeof($arr2);
        echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br>";
        echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br>";
        $arr3[$num1 + $num2] = array();
        $a = 0;
        $b = 0;
        $c = 0;
        for($i=0; $i<count($arr1); $i++)
        {
            $val = $arr1[$i];
            $j = $i-1;
            while($j>=0 && $arr1[$j] > $val)
            {
                $arr1[$j+1] = $arr1[$j];
                $j--;
            }
            $arr1[$j+1] = $val;
        }
        for($i=0; $i<count($arr2); $i++)
        {
            $val = $arr2[$i];
            $j = $i-1;
            while($j>=0 && $arr2[$j] > $val)
            {
                $arr2[$j+1] = $arr2[$j];
                $j--;
            }
            $arr2[$j+1] = $val;
        }
        while ($a < $num1 && $b < $num2)
        {
            if ($arr1[$a] < $arr2[$b])
            {
                $arr3[$c++] = $arr1[$a++];
            }
            else
            {
                $arr3[$c++] = $arr2[$b++];
            }
        }
        while ($a < $num1)
        {
            $arr3[$c++] = $arr1[$a++];
        }
        while ($b < $num2)
        {
            $arr3[$c++] = $arr2[$b++];
        }
        echo "Array After Merging : ";
        for ($x = 0; $x < $num1 + $num2; $x++)
        {
            echo $arr3[$a],", ";
        }
?>