<label>Program to Read a 2D array and print its transpose</label>
<?php
    $arr = array(
        array(11, 07, 38),
        array(48, 53, 69),
        array(27, 87, 89));
    $rows = count($arr);
    $cols = count($arr[0]);
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            $transpose[$i][$j] = 0;
            $transpose[$i][$j] = $arr[$j][$i];
        }
    }
    echo("Original matrix is: <br>");
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            echo ($arr[$i][$j] . " ");
        }
        echo( "<br>");
    }
    echo( "Transpose of given matrix is:<br>"); 
    for($i = 0; $i < $cols; $i++)
    {
        for($j = 0; $j < $rows; $j++)
        {
            echo($transpose[$i][$j] . " ");
        }
        echo( "<br>");
    }
?>