<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
 <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid vh-100" style="margin-top:300px">
            <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Sign In</h3>
                        </div>
                        <form action="">
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="password">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember Me
                                    </label>
                                </div>
                                <button class="btn btn-primary text-center mt-2" type="submit">
                                    Login
                                </button>
                                <button class="btn btn-primary text-center mt-2" type="submit">
                                    SignUp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>-->
  <form method="post" style="text-align: center;"> 
    Enter User Name : <input type="text" name="username" placeholder="Enter UserName"><br><br>
    Enter Password : <input type="password" name="password" placeholder="Enter Password"><br><br>
    <input type="submit" name="login" value="Login"><br><br>
    <input type="submit" name="signup" value="Sign Up"><br><br>
    <input type="submit" name="show" value="Show"><br><br>
    <input type="submit" name="insert" value="Insert">
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
if (isset($_POST['insert'])) 
{
    header('Location: Insert.php');
}
?>