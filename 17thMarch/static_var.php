<?php
function add() 
{
  static $num = 0;
  $num++;
  return $num;
}
echo add();
echo "<br>";
echo add();
echo "<br>";
echo add();
?>