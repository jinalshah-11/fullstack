<?php
echo "Program to print a character from keyboard and then print it in reverse case.";
echo "<br>";
$ch='e';
if(ctype_lower($ch))
{
    echo "Reverse case" .strtoupper($ch);
}
else
{
    echo  "Reverse case" .strtolower($ch);
}
?>