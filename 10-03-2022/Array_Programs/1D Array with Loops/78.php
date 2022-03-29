<!DOCTYPE html>
<html>
<head>
    <title>Reverse of an Array</title>
</head>
<body>
    <form method="POST">
    <label>Program to reverse an array without using another array.</label><br><br>
    <label>Enter Array</label><br><br>
    Enter Number1 : <input type="text" name="num1"><br><br>
    Enter Number2 : <input type="text" name="num2"><br><br> 
    Enter Number3 : <input type="text" name="num3"><br><br>
    Enter Number4 : <input type="text" name="num4"><br><br>
    Enter Number5 : <input type="text" name="num5"><br><br>
    <input type="submit" value="Reverse" name="submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
        echo"<label>Program to Reverse an array without using another Array.</label>";
        echo"<br><br>";
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $num3=$_POST['num3'];
        $num4=$_POST['num4'];
        $num5=$_POST['num5'];
        $arr=[$num1,$num2,$num3,$num4,$num5];
        print_r($arr);
        echo "<br><br>";
        $rev = sizeof($arr);
    $i=0;
    $j=$rev-1;
    while($i<$j){
      $temp=$arr[$i];
      $arr[$i]=$arr[$j];
      $arr[$j]=$temp;
      $i++;
      $j--;
    }
    echo "Reversed array is ".$arr[0]."<br>".$arr[1]."<br>".$arr[2]."<br>".$arr[3]."<br>".$arr[4];
}
?>