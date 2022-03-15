<?php
echo "Program to find the number of and sum of all integers greater than 100 and less than 200 that are divisible by 7.";
echo "<br>";
   $sum=0;
   for($i=101;$i<200;$i++)
   {
     if($i % 7== 0)
     {
       echo (int)$i;
       echo "<br>";
       $sum = $sum+$i;
     }
   }
echo "Sum of Numbers divisible by 7 between 100-200 is " .$sum;
?>