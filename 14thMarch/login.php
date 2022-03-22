<!DOCTYPE html>
<html>
<head>
    <title>Login_Cookie</title>
</head>
<body>
    <form method="post">
        <label>Login</label>
        <br>
        <input type="text" name="username" placeholder="Enter Your User Name">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $uname = $_POST['username'];
    $pswd = $_POST['password'];

    if(empty($uname) || empty($pswd))
	{
        echo "Try Again";
        header("refresh:1;url=login.php");
    }
    else
	{
        setcookie("username",$uname,time()+3600,"/");
        echo "Login Successful";
        header("refresh:1;url=logout.php");
    }
}
?>