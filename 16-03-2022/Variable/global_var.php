<?php
$a = 100;
$b = 50;
function add() 
{
    $GLOBALS['sum'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo "Addition of ".$GLOBALS['a']. " + " .$GLOBALS['b']. " is : ".$GLOBALS['sum'];
    echo "<br><br>";
} 
function subtract()
{
    $GLOBALS['sub'] = $GLOBALS['a'] - $GLOBALS['b'];
    echo "Subtraction of ".$GLOBALS['a']. " - " .$GLOBALS['b']. " is : ".$GLOBALS['sub'];
    echo "<br><br>";
}
function multiply()
{
    $GLOBALS['mul'] = $GLOBALS['a'] * $GLOBALS['b'];
    echo "Multiplication of ".$GLOBALS['a']. " * " .$GLOBALS['b']. " is : ".$GLOBALS['mul'];
    echo "<br><br>";
}
function divide()
{
    $GLOBALS['div'] = $GLOBALS['a'] / $GLOBALS['b'];
    echo "Division of ".$GLOBALS['a']. " / " .$GLOBALS['b']. " is : ".$GLOBALS['div'];
    echo "<br><br>";
}
add();
subtract();
multiply();
divide();
?> 