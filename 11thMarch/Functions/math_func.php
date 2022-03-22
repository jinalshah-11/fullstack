<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Functions</title>
</head>
<body>
    <form method="POST">
        <label>Math Functions<br><br></label>
        Enter a Number :<input type="text" name="num">
        <br><br>
        <input type="submit" value="Submit" name="submit">
        <br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num']; 
    echo "Number is :".$num;
    echo "<br><br>";
    echo "Absolute value of number is : ".(abs($num));
    echo "<br><br>";
    echo "Rounds a Fraction Up : ".(ceil($num));
    echo "<br><br>";
    echo "Rounds a Fraction Down : ".(floor($num));
    echo "<br><br>";
    echo "Square Root of : ".(sqrt($num));
    echo "<br><br>";
    echo "Logarithm of : ".(log($num));
    echo "<br><br>";
    $num1=pow($num, 2);  
    echo "Your number is = pow ($num, 2)";
    echo "<br>";  
    echo "By using sqrt function Your number is : ".$num1;
    echo "<br><br>";  
    $num1=(base_convert($num,18,3));
    echo "Binary number of given number is : ".$num1;
    echo "<br><br>";
    echo "Binary number of given number is : ".(bindec($num1));
    echo "<br><br>";
    echo "Value of pi() : ".pi();
    echo "<br><br>";
    echo "the Degree Value of given Radian Value (pi) : ".(deg2rad(pi()));
    echo "<br><br>";
    echo "the Radian Value of given Degree Value as Input : ".(deg2rad($num));
    $num2=max(48,18,95,78,11.7);  
    echo "<br><br>Your number is =max(48,18,95,78,11.7)";
    echo "<br><br>";  
    echo "By using Maximum function Your number is : ".$num2;
    echo "<br><br>";
    $num3=min(48,18,95,78,11.7);
    echo "Your number is =min(48,18,95,78,11.7)";
    echo "<br><br>";  
    echo "By using Minimum function Your number is : ".$num3;  
}    
?>  