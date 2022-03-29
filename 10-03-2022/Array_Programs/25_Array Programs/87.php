<label>Program to Read an array and count total no of Even and Odd elements</label>
<?php
    $arr = array(07, 11, 24 ,36, 28, 99, 56, 68, 72, 89);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br>";
    $n = count($arr);
	$even_cnt = 0;		
	$odd_cnt = 0;			

	for( $i = 0 ; $i < $n; $i++)
	{
		if ($arr[$i] & 1 == 1)
			$odd_cnt ++ ;	
		else			
			$even_cnt ++ ;		
	}

	echo "Number of even elements : $even_cnt<br/>";
    echo "Number of odd elements : $odd_cnt";	
?>