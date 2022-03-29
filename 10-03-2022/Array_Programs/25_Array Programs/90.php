<label>Program to Read an array and count Total no of Positive, Megative and zero Elements</label>
<?php
    $array = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$array)," ]"."<br>";
    $num = count($array);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    for($i = 0; $i < $num; $i++){
        if($array[$i] == 0)
            $zero++;
        else if($array[$i] < 0)
            $neg++;
        else
            $pos++;
    }
    echo "Total Number of Zero Element : $zero<br><br>";
    echo "Total Number of Negative Element : $neg<br><br>";
    echo "Total Number of Positive Element : $pos";
?>