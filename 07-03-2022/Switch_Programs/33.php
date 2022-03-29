<?php
echo "Program to print the name of colors starting with the scanned character";
echo "<br>";
 $color= 'G';
 switch ($color) 
{
    case 'g':
         echo "Green Color";
         break;
    case 'G':
        echo "Green Color";
        break;
    case 'w':
        echo "White Color";
        break;
    case 'W':
        echo "White Color";
        break;
    default:
        echo "Enter Valid Color";
         break;
}
?>