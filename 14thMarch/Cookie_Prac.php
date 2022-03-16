<?php
$cookie_name="Hello";
$cookie_value="World";
setcookie($cookie_name,$cookie_value,time()+ 3600);
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name]))
{
    echo "Cookie Name is: " .$cookie_name;
    echo "<br>";
    echo "Cookie Value is: " .$_COOKIE[$cookie_name];
}
else
{
    echo "Cookie is not set";
}
?>
</body>
</html>