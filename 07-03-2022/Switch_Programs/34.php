<?php
echo "Program to show 5 arithmetic operations on two integer numbers using Switch-case.";
echo "<br>";
echo "What Operation you want to Perform?<br>";
echo "1.Addition";
echo "<br>";
echo "2.Subtraction";
echo "<br>";
echo "3.Multiplication";
echo "<br>";
echo "4.Division";
echo "<br>";
echo "5.Modulo";
echo "<br>";
$num1=60;
$num2=40;
$arop=3;
		switch($arop)
		{
		case 1: echo "You selected option Add ";
				$ans=$num1+$num2;
		        echo $num1." + ".$num2." = ".$ans;
				break;
		case 2: echo "You selected option Subtract ";
                $ans=$num1-$num2;
		        echo $num1." - ".$num2." = ".$ans;
				break;	
		case 3: echo "You selected option Multiply ";
                $ans=$num1*$num2;
		        echo $num1." * ".$num2." = ".$ans;
				break;
		case 4: echo "You selected option Division ";
                $ans=$num1/$num2;
		        echo $num1." / ".$num2." = ".$ans;
				break;
        case 5: echo "You selected option Modulo ";
                $ans=$num1%$num2;
                echo $num1." % ".$num2." = ".$ans;
        break;
		default: 
        echo "Please select from the above option";
		}
?>