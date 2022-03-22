<html> 
  <head> 
    <title>PHP Cookies Count</title> 
 </head> 
</html>
<?php 
if (!isset($_COOKIE['cnt'])) 
{  
  $cookie_cnt = 1;
  echo "<b>Welcome!</b><br><br>This is your First Visit ";
  setcookie("cnt", $cookie_cnt);
}
else
{
  $cookie_cnt = ++$_COOKIE['cnt'];
  setcookie("cnt", $cookie_cnt); 
  echo "You have visited this page ".$_COOKIE['cnt']." times."; 
}
?> 
  