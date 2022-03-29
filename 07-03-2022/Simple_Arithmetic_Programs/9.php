<?php
echo "Program to calculate the time given in Seconds into hours, minutes and seconds.";
echo "<br>";
$secs = 56875;
$sec = $secs % 60;
$hrs = $secs / 60;
$mins = $hrs % 60;
$hrs = $hrs / 60;
echo "HH:MM:SS-> " .(int)$hrs . ":" .(int)$mins . ":" .(int)$sec;
?>