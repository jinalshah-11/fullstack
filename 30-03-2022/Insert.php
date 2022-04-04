<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert</title>
</head>
<body>
    <form action="" method="POST" style="text-align: center;">
        <b>Enter FullName : </b><input type="text" name="fullname" required><br><br>
        <b>Enter Username : </b><input type="text" name="user_name" required><br><br>
        <b>Enter Mobile : </b><input type="text" name="mobile" required><br><br>
        <b>Enter Email : </b><input type="email" name="email" required><br><br>
        <b>Enter Password : </b><input type="text" name="password" required><br><br>
        <b>Confirm Password : </b><input type="text" name="cpassword" required><br><br>
        Add User : <input type="submit" name="insert" value="Insert">
    </form>
</body>
</html>
<?php

if(isset(($_POST['insert'])))
{
    header('refresh:1');
    $fullname=$_POST['fullname'];
    $username=$_POST['user_name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
        $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
        $query=mysqli_query($conn,"Insert into client(fullname,user_name,mobile,email,password) values('$fullname','$username',$mobile,'$email','$password')") or die('Enter Data');
        if($query)
        {
            echo "Data added Successfully";
            header('Location : LoGin.php');
        }
        else
        {
            echo "Error in Inserting Data";
        }
        mysqli_close($conn);
    }
//}
?>



