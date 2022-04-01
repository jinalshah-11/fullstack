<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  <form method="post">
    <input type="submit" name="login" value="Login"><br><br>
    <input type="submit" name="signup" value="Sign Up"><br><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['login'])) 
{
    header('Location: LoGin.php');
}
if (isset($_POST['signup'])) 
{
    header('Location: SignUp.php');
}
?>