<!DOCTYPE html>
<html>
<body>
    <form method="POST">
    <label>Program to input n numbers and print</label>
    <label>
    (a) the Sum of all n numbers.
    (b) the Sum of square of all even numbers.
    (c) the Sum of cubes of all odd numbers.<br><br></label>
        Enter Number 1 : <input type="text" name="first">
        <br><br>
        Enter Number 2 : <input type="text" name="second">
        <br><br>
        Enter Number 3 : <input type="text" name="third">
        <br><br>
        Enter Number 4 : <input type="text" name="fourth">
        <br><br>
        Enter Number 5 : <input type="text" name="fifth">
        <br><br>
        <input type="submit" value="submit">
        <br><br>
    </form>
</body>
</html>

<?php
$num1=$_POST['first'];
$num2=$_POST['second'];
$num3=$_POST['third'];
$num4=$_POST['fourth'];
$num5=$_POST['fifth'];
echo "Input numbers are " .$num1.",".$num2.",".$num3.",".$num4.",".$num5;
echo "<br>";
$sum=$num1+$num2+$num3+$num4+$num5;
$evennum_sum=0;
$oddnum_sum=0;

$number=[$num1,$num2,$num3,$num4,$num5];
echo "<br>Sum of all Numbers : ".$sum;
$len=count($number);
echo "<br><br>";
for($i=0;$i<$len;$i++)
{
    if($number[$i]%2==0)
    {
        echo "Even number : ".$number[$i];
        echo "<br>";
        $evennum_sum+=($number[$i]*$number[$i]);
    }
    elseif(!$number[$i]%2==0)
    { 
        echo "Odd number : ".$number[$i];
        echo "<br>";
        $oddnum_sum+=($number[$i]*$number[$i]*$number[$i]);
    }
}
echo "<br>Sum of square of all Even numbers : ".$evennum_sum;
echo "<br>Sum of cubes of all Odd numbers : ".$oddnum_sum;
?>