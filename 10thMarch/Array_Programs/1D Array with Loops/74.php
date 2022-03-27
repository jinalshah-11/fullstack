<!DOCTYPE html>
<html>
<head>
    <title>Insertion Sort</title>
</head>
<body>
    <form method="POST">
    <label>Program to Sort an array through Insertion Sorting.</label><br><br>
    <label>Enter Array Elements</label><br><br>
    Enter Number1 : <input type="text" name="num1"><br><br>
    Enter Number2 : <input type="text" name="num2"><br><br> 
    Enter Number3 : <input type="text" name="num3"><br><br>
    Enter Number4 : <input type="text" name="num4"><br><br>
    Enter Number5 : <input type="text" name="num5"><br><br>
    <input type = "submit" value = "Sort" name = "submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    echo"<label>Program to Sort an array through Insertion Sorting.</label>";
    echo"<br><br>";
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $arr = [$num1,$num2,$num3,$num4,$num5];
    print_r($arr);
    echo "<br><br>"; 
    $sort = count($arr);
    for($i=0; $i<$sort ;$i++){
        $number = $arr[$i];
        $j = $i-1;
        while($j >= 0 && $number<$arr[$j]){
          $arr[$j+1] = $arr[$j];
          $arr[$j] = $number;
          $j = $j-1;
        }
    }
    echo "Sorted Array using insertion sorting : ";
    echo "<br>";
    echo $arr[0]."<br>" .$arr[1]."<br>".$arr[2]."<br>".$arr[3]."<br>".$arr[4]."<br>";
    print_r($arr);
}
?>