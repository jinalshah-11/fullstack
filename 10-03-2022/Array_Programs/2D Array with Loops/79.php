<label>Program to Compute the Addition/Subtraction of 2 Matrixs </label>
<?php
    $arr1 = array(
        array(7, 5, 2),
        array(9, 6, 3),
        array(8, 1, 4));

    $arr2 = array(
        array(5, 3, 1),
        array(7, 4, 2),
        array(2, 3, 2));
    $a = count($arr1);
    $b = count($arr1[2]);
    $c = count($arr2);
    $d = count($arr2[2]);
    echo "The First Matrix :<br>";
    for ($rows = 0; $rows < $a; $rows++) 
    {
        for ($cols = 0; $cols < $b; $cols++)
        echo " ".$arr1[$rows][$cols];
        echo "<br>";
    }
    echo "The Second Matrix :<br>";
    for ($rows = 0; $rows < $c; $rows++) 
    {
        for ($cols = 0; $cols < $d; $cols++)
        echo " ".$arr2[$rows][$cols];
        echo "<br>";
    }
    $rows = count($arr1);
    $cols = count($arr1[0]);
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            $diff[$i][$j] = 0; 
            $diff[$i][$j] = $arr1[$i][$j] - $arr2[$i][$j];
        }
    }
    echo "Subtraction of Two Matrices : <br>";

    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            echo $diff[$i][$j] . " ";
            echo "&nbsp;";
        }
        echo "<br>";
    }
    echo "Addition of Matrices is:<br>";
    for ($rows = 0; $rows < 3; $rows++) 
    {
        for ($cols = 0; $cols < 3; $cols++)
            echo " ".$arr1[$rows][$cols]+$arr2[$rows][$cols]." ";
            echo "<br>";
    }
?>