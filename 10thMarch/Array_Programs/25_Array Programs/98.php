<label>Program to Read an array and check whether its elements are stored In Palindrome form or not</label>
<?php
    $arr = array(121, 1331, 353);
	echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br/>";
    $num = count($arr);
	$flag = 0;
	for($i = 0;$i < $num/2;$i++)
    {
            for($j= $num-1;$j >= $num/2; $j--) 
	        {
		        if($arr[$i] != $arr[$j]) 
		        {
			        $flag = 1;
			        break;
		        }
	        } 
    }
	if($flag == 1)
		printf("Array is Pallindrome");
	else
		printf("Array is not Pallindrome");
?>