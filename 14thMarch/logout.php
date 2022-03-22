<?php

if(!isset($_COOKIE['username']))
{
    header("Location:login.php");
}
if(isset($_COOKIE['username']))
{
    echo "Welcome ".$_COOKIE['username'];
}
if(isset($_POST['logout']))
{
    setcookie("username","",time()-3600,"/");
    header("refresh:0;url=login.php");
}
?>
<form method="POST">
    <input type="submit" name="logout" value="Logout">
</form>