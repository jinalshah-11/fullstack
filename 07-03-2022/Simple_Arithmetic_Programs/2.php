<?php
echo "Volume and Surface Area of Sphere";
echo "<br>";
 define ("PI","3.14");
 $r=5;
     $vol=0.75*PI*$r*$r*$r;
     echo "Volume of Sphere: " .$vol;
     echo "<br><br>";
     $surfacearea=4*PI*$r*$r;
     echo "Surface Area of Sphere: " .$surfacearea;
?>