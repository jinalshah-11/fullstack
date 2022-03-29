<?php
echo "Program to calculate Billing amount for a telephone customer according to given slabs";
echo "<br>";
$units=117;
if ($units < 50)
{
    echo "Billing Amount is ".$units * 100;
}
else if ($units >= 51 && $units <= 100)
{
    echo "Billing Amount is ".$units * 101;
}
else if ($units >= 101 && $units <= 200)
{
    echo "Billing Amount is ".$units * 101.50;
}
else if ($units >= 201 && $units <= 300)
{
    echo "Billing Amount is ". $units * 102;
}
else if($units >= 300)
{
    echo "Billing Amount is ".$units * 102.50;
}
else
{
    echo "Please enter Valid units";
}
?>