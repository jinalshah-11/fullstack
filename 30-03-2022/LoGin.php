<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  <form method="post">
    Enter User Name : <input type="text" name="username" placeholder="Enter UserName"><br><br>
    Enter Password : <input type="password" name="password" placeholder="Enter Password"><br><br>
    <input type="submit" name="login" value="Login"><br><br>
    <input type="submit" name="signup" value="Sign Up"><br><br>
    <input type="submit" name="show" value="Show"><br><br>
  </form>
</body>
</html>

<?php
if(isset($_POST['login']))
{
  $uname = ($_POST['username']);
  $password = ($_POST['password']);

  $conn = mysqli_connect("localhost", "root", "", "CRUD") or die("Error in Database Connection");
  $query = mysqli_query($conn, "select * from client where user_name='$uname' AND password='$password'") or die("Error in Login Query");
  $rows = mysqli_num_rows($query);

    if($rows>0)
    {
      while($rows = mysqli_fetch_array($query))
      { 
        $username = $rows['user_name'];
        $pass = $rows['password'];
      }
      if($uname == $username && $password==$pass)
          {
              echo "Login Successful<br><br>";
              echo "<b> Welcome </b><br><br>" .$uname;
          }
    }
      else
      {
          echo "Incorrect Username and Password<br>";
          echo "Please Try Again Later";
            header("Location:SignUp.php");
      }
          mysqli_close($conn);
}
if (isset($_POST['signup'])) 
{
    header('Location: SignUp.php');
}
if (isset($_POST['show'])) 
{
    header('Location: Show.php');
}
if (isset($_POST['edit'])) 
{
    header('Location: Edit.php');
}
?>