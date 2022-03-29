<label>Program to Read an array and find our max and second max </label>
<?php
    $array = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$array)," ]" . "<br><br>";
    $max = 0;
    $secondmax = 0;
    for ($i = 0; $i < count($array); $i++) 
    {
        if ($array[$i] > $max) 
        {
            $secondmax = $max;
            $max = $array[$i];
        } else if (($array[$i] > $secondmax) && ($array[$i] != $max)) 
        {
            $max2 = $array[$i];
        }
    }
    echo "Highest Value is : $max <br><br>";
    echo "Second Maximum Number : $secondmax";
?>