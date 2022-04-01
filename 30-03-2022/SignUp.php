<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
</head>
<body>
    <form method="post">
        <h2>SignUp</h2>
        Enter FullName : <input type="text" name="fullname" placeholder="Enter your FullName" required><br><br>
        Enter Email : <input type="text" name="email" placeholder="Enter your EmailId" required><br><br>
        Enter UserName : <input type="text" name="uname" placeholder="Enter User Name" required><br><br>
        Enter MobileNo : <input type="number" name="mobile" placeholder="Enter your Mobile" required><br><br>
        Enter Password : <input type="text" name="pass" placeholder="Enter your Password" required><br><br>
        Enter Confirm Password : <input type="text" name="cpass" placeholder="Confirm your Password" required><br><br>
        <input type="submit" name="signup" value="Sign Up">
   </form>
</body>
</html>

<?php
if (isset($_POST['signup'])) 
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
   
        $conn = mysqli_connect("localhost", "root", "", "CRUD") or die("Error in Database Connection");
        $query = mysqli_query($conn, "Insert into client(fullname,email,user_name,mobile,password) values('$fullname','$email','$uname',$mobile,'$pass')") or die("Error in User Signup");
        if ($query) 
        {
            if($pass==$cpass)
            {
                echo "<br><h2>SignUp Successful<h2>";
                header("Location:LoGin.php");
            }
        }
        else 
        {
            echo "Try Again";
        }
        mysqli_close($conn);
}
?>
