<!DOCTYPE html>
<html>
<head>
    <title>Binary Search</title>
</head>
<body>
    <form method="POST">
    <label>Program to Sort an array through Binary Search.</label><br><br>
    <label>Enter Array Elements</label><br><br>
    Enter Number1 : <input type="text" name="num1"><br><br>
    Enter Number2 : <input type="text" name="num2"><br><br> 
    Enter Number3 : <input type="text" name="num3"><br><br>
    Enter Number4 : <input type="text" name="num4"><br><br>
    Enter Number5 : <input type="text" name="num5"><br><br>
    Enter Number You want to search in Array : <input type="text" name="number"><br><br>
    <input type="submit" value="Search" name="submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    echo"<label> Program to find an element in the Array (Binary Search).</label>";
    echo"<br>";
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $num4=$_POST['num4'];
    $num5=$_POST['num5'];
    $arr=[$num1,$num2,$num3,$num4,$num5];
    print_r($arr);
    echo "<br>";

    if(isset($_POST['number']))
    {
        $number=$_POST['number'];
        echo"Searching for Number : ".$number;
        echo"<br>";
        $search = sizeof($arr);  
        $cnt=0;
        if(isset($arr[$number]))
        {
            for($i=0;$i<$search;$i++)
            {
                $mid=$i+($search-$i)/2;
                if($arr[$mid]==$number)
                {
                   $cnt++;
                }
                else if($arr[$mid]<$number)
                {
                    $i=$mid+1;
                    $cnt++;
                }
                else if($arr[$mid]>$number)
                {
                    $i=$mid-1;
                    $cnt++;
                }        
            }
        }
    }
        if($cnt>=1)
        {
            echo "Number is found at" .$arr[$mid];
        }
        else
        {
            echo "Number is not present";
        }
}
?>