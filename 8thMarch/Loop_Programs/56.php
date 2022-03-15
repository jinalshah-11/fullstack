<?php
echo"Program to compute the grades of n students according to the following";
echo"<br><br>";
$r=$_POST['first'];
$marks1=$_POST['m1'];
$marks2=$_POST['m2'];
$marks3=$_POST['m3'];
$marks4=$_POST['m4'];
$marks5=$_POST['m5'];
echo"Roll Number is".$r;
echo"<br><bt>";
$total=(($marks1+$marks2+$marks3+$marks4+$marks5)*100);
$per=round($total/500);
while($per>35){
    if($per>80&&$per<=100)
    {
      echo "Honours";
    }
    else if($per=60&&$per<=79)
    {
        echo "First Division";
    }
    else if($per=50&&$per<=59)
    {
        echo "Second Division";
    }
    else if($per=40&&$per<=49)
    {
        echo "Third Division";
    }
    else
    {
        echo "Fail";
    } 
}
?>