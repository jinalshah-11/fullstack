<label>Program to Read an array and print it in ascending order.(SORTING)</label>
<?php
    $arr = array(5, 9, 1, 3, 7);   
    $temp = 0;    
    echo "Original Array : [ ",implode(", ",$arr)," ]"."<br><br>"; 
    for ($i = 0; $i < count($arr); $i++) 
    {   
        for ($j = $i+1; $j < count($arr); $j++) 
        {   
            if($arr[$i] > $arr[$j]) 
            {  
                $temp = $arr[$i];  
                $arr[$i] = $arr[$j];  
                $arr[$j] = $temp;  
            }   
        }   
    }   
    echo "Sorted Array : [ ",implode(", ",$arr)," ]"."<br><br>"; 
?>