<?php
echo"Program to input ages of 10 persons and count the number of persons between age group of 50 and 60";
echo"<br><br>";
$num1=$_POST['n1'];
$num2=$_POST['n2'];
$num3=$_POST['n3'];
$num4=$_POST['n4'];
$num5=$_POST['n5'];
$num6=$_POST['n6'];
$num7=$_POST['n7'];
$num8=$_POST['n8'];
$num9=$_POST['n9'];
$num10=$_POST['n10'];
$age=[$num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10];
$cnt=0;
$len=count($age);
for($i=0;$i<$len;$i++){

    if($age[$i]>=50&&$age[$i]<=60){
        $cnt++;
    }
}
echo "The number of persons between age group of 50 and 60 : ".$cnt;
?>