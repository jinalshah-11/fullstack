<!DOCTYPE html>
<html>
<head>
    <title>Array Functions</title>
</head>
<body>
    <form method="POST">
    <label>PHP ARRAY FUNCTIONS<br><br></label>
    <label>Enter Array Elements :<br><br></label>
    Enter key of Number 1 : <input type="text" name="num1"><br><br>
    Enter Value : <input type="text" name="first">
    <br><br>
    Enter key of Number 2 : <input type="text" name="num2"><br><br>
    Enter Value : <input type="text" name="second">
    <br><br> 
    Enter key of Number 3 : <input type="text" name="num3"><br><br>
    Enter Value : <input type="text" name="third">
    <br><br> 
    Enter key of Number 4 : <input type="text" name="num4"><br><br>
    Enter Value : <input type="text" name="fourth">
    <br><br> 
    Enter key of Number 5 : <input type="text" name="num5"><br><br>
    Enter Value : <input type="text" name="fifth">
    <br><br>
    <label>Enter Number to Add:</label>
    <br><br>
    Enter Value : <input type="text" name="n1"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{    
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $num4=$_POST['num4'];
    $num5=$_POST['num5'];
    $val1=$_POST['first'];
    $val2=$_POST['second'];
    $val3=$_POST['third'];
    $val4=$_POST['fourth'];
    $val5=$_POST['fifth'];
    $arr=[$num1=>$val1,$num2=>$val2,$num3=>$val3,$num4=>$val4,$num5=>$val5];
    echo "<br><br>";
    print_r($arr);
    echo "<br><br><br>";
    echo"Flipping Keys and Values of Array";
    echo "<br><br>";
    print_r(array_flip($arr));
    echo "<br><br>";
 
    echo "Upper Case of All Keys : ";
    echo "<br><br>";
    print_r((array_change_key_case($arr,CASE_UPPER)));
    echo "<br><br>";

    echo "Lower case of all Keys : ";
    echo "<br><br>";
    print_r((array_change_key_case($arr,CASE_LOWER)));
    echo "<br><br>";
    
    echo "Count Array  : ".count($arr);
    echo "<br><br>";
    
    $sortarr=sort($arr);
    echo "Sorted Array :";
    echo "<br>";
    foreach($arr as $a)
    {
        echo $a ."<br> ";
    }
    echo "<br><br>";
    $revarr=array_reverse($arr);
    echo "Reversed Array :";
    echo "<br>";
    foreach($revarr as $ar)
    {    
        echo "$ar <br>";
    }
    
    echo "Array in parts : ";
    echo "<br><br>";
    print_r(array_chunk($arr,2));
    echo "<br><br>";

    if(isset($_POST['n1']))
    {
        $n1=$_POST['n1'];
        array_push($arr,$n1);
        print_r($arr);
    }
    echo "<br><br>";
    echo "Random Array generated: ".$arr[array_rand($arr)];
}
?>