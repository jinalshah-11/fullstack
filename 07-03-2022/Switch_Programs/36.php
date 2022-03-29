<?php
echo "Program to input number of the month of a year and print how many days are there in the month.";
echo "<br>";
$month=12;
    switch($month)
    {
        case 1: 
            echo "31 days";
            break;
        case 2: 
            echo "28/29 days";
            break;
        case 3: 
            echo "31 days";
            break;
        case 4: 
            echo "30 days";
            break;
        case 5: 
            echo "31 days";
            break;
        case 6: 
            echo "30 days";
            break;
        case 7: 
            echo "31 days";
            break;
        case 8: 
            echo "31 days";
            break;
        case 9: 
            echo "30 days";
            break;
        case 10: 
            echo "31 days";
            break;
        case 11: 
            echo "30 days";
            break;
        case 12: 
            echo "31 days";
            break;
        default: 
            echo "Please Enter Month between 1-12";
    }
?>