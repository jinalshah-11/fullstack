<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<form method="POST">
        <h3>Please LOG IN</h3>
		<input type="text" name="username" placeholder="Enter Your Name">
		<br><br>
        <input type="password" name="password" placeholder="Enter Password">
		<br><br>
		<input type="submit" name="login" value="Login">
        <br><br>
	</form>
</body>
</html>
<?php
	if(!empty($_POST['username'])){
		$uname = ($_POST['username']);
        $pswd = ($_POST['password']);
		setcookie('username', $uname, time()+3600); 
        setcookie('password', $pswd, time()+3600); 
		header('Location: logout.php');
	}
    elseif(empty($_POST['username'])){
        echo "Cookies are not Set";
    }
?>