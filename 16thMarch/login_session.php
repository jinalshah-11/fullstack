<!DOCTYPE html>
<html>
<head>
    <title>Login Using Session</title>
</head>
<body>
    <form method="POST">
        <h1>Session Login</h1>
        <br>
        Enter User Name :<input type="text" name="username" placeholder="Enter Your UserName">
        <br>
        Enter Password :<input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(isset($_SESSION))
    {
        if(empty('$username') || empty('$password'))
        {
            if($username=='jinal' || $password=='1234')
            {
                session_start();
                echo "LOGIN SUCCESSFUL";
                header("refresh:1;url=logout.php");
            }
        }
        else
        {
            echo "Please try Again";
        }
    }
    
}