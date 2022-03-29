<?php
echo "Program to print Grade of a student obtained in his exams according to given criteria";
echo "<br>";
$s1=75;
$s2=80;
$s3=90;
$s4=85;
$s5=95;
$tot=($s1+$s2+$s3+$s4+$s5);
$per= ($tot/500)*100;
echo "Percentage = " .$per;
echo "<br>";
if($per>=85)
{
    echo "Grade is S ";
}
else if($per>=65)
{
    echo "Grade is A ";
}
else if($per>=55)
{
    echo "Grade is B ";
}
else if($per>=45)
{
    echo "Grade is C ";
}
else
{
    echo "Grade is F ";
}
?>