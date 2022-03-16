<?php
    if(isset($_COOKIE['username']))
    {
    echo "User Logged in Successfully<br><br>";
	echo "<b> Welcome </b>" .$_COOKIE['username'];
    echo"<br><br>";
    if(count($_COOKIE) > 0)
    {
        echo "There are ".count($_COOKIE). " Cookies are Saved<br>";
    }
    else
    {
        echo "There are no Cookies Saved";
        echo"<br>";
    }
    echo"<br><br>";
    
    echo '<form method="post">';
    echo '<input type="submit" name="logout" value="Logout">
    </form>';

    if(isset($_POST['logout']))
    {
        setcookie("username","",time());   
        setcookie("password","",time());
        header('Location:login.php');
    }
}
    elseif(!isset($_COOKIE['username']))
    {
       header('Location:login.php');
    }   
?>