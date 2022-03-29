<!DOCTYPE html>
<html>
<head>
    <title>Linear Search</title>
</head>
<body>
    <form method="POST">
    <label>Program to Sort an array through Linear Search.</label><br><br>
    <label>Enter Array Elements</label><br><br>
    Enter Number1 : <input type="text" name="num1"><br><br>
    Enter Number2 : <input type="text" name="num2"><br><br> 
    Enter Number3 : <input type="text" name="num3"><br><br>
    Enter Number4 : <input type="text" name="num4"><br><br>
    Enter Number5 : <input type="text" name="num5"><br><br>
    Enter Number You want to search in Array : <input type="text" name="number"><br><br>
    <input type="submit" value="Sort" name="submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    echo"<label> Program to find an element in the Array (Linear Searching).</label>";
    echo"<br>";
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $num4=$_POST['num4'];
    $num5=$_POST['num5'];
    $arr=[$num1,$num2,$num3,$num4,$num5];
    print_r($arr);
    echo "<br>";
    $search = sizeof($arr);
    if(isset($_POST['number']))
    {
    $n=$_POST['number'];
    echo"Searching for Number : ".$n;
    echo"<br>";
    $cnt=0;
    for($i=0;$i<$search;$i++)
    {
        if($arr[$i]==$n)
        {
            echo "Number is present in Array : ".$n;
            $cnt++;
        }
    }
    if($cnt==0)
    {
        echo"Number is not present in Array";
    }
    }
}
?>