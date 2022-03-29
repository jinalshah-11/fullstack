<?php
echo "Program to calculate the Gross Salary when Basic Salary is given. The allowances HRA(%) ,DA (%),
PF and Medical are also given. Add the HRA and DA in the Basic Salary but deduct PF and Medical
from the Salary.";
echo "<br>";
$bs=25000;
$hra=$bs*0.04;
$da=$bs*0.02;
$pf=$bs*0.03;
$med=$bs*0.02;
$gs=($bs+$hra+$da)-($pf+$med);
echo "Gross Salary is " .$gs;
?>