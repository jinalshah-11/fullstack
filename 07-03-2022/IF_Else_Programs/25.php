<?php
echo "Program to check whether a scanned character is a digit, an alphabet or a special character.";
echo "<br>";
$ch= '11';

	if (($ch >= 'a' && $ch <= 'z') 
    || ($ch >= 'A' && $ch <= 'Z'))
    {
		echo "Entered Character is Alphabet";
    }
    else if ($ch >= '0' && $ch <= '99999')
    {
	    echo "Entered Character is Digit";
    }
    else
    {
        echo "Special Character";
    }
?>
