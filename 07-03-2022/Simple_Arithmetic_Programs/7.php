<?php
echo "Program to calculate the roots of a quadratic equation.";
echo "<br>";
$a=5;
$b=4; 
$c=6;
$quadratic = $b*$b - 4*$a*$c;
  if ($quadratic >= 0)
  {
    $r1 = (-$b + sqrt($quadratic))/(2*$a);
    $r2 = (-$b - sqrt($quadratic))/(2*$a);
    echo "Roots are: .$r1, .$r2 \n";   
  } 
  else 
  {
    $r1 = -$b/(2*$a);
    $r2 = sqrt(-$quadratic)/(2*$a);
    echo "Roots are: .$r1, .$r2  \n"; 
  }
?>

