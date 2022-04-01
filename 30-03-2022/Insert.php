<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert</title>
</head>
<body>
    <form action="" method="POST" style="text-align: center;">
        <b>Enter FullName : </b><input type="text" name="name" required><br><br>
        <b>Enter Username : </b><input type="text" name="uname" required><br><br>
        <b>Enter Mobile : </b><input type="text" name="mobile" required><br><br>
        <b>Enter email : </b><input type="email" name="email" required><br><br>
        <b>Enter password </b><input type="text" name="password" required><br><br>
        <input type="submit" name="insert" value="Insert">
    </form>
</body>
</html>
<?php
header('refresh:10');
if(isset(($_POST['insert']))){
    header('refresh:1');
    
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $conn=mysqli_connect("localhost","root","","CRUD") or die("error in con");
    $query=mysqli_query($conn,"Insert into client values('$fullname','$username',$mobile,'$email','$password')") or die('enter data');
    if($query){
       echo "Data added Successfully";
       header('location:Dashboard.php');
    }
    else{
       echo "Error in Inserting Data";
    }
    mysqli_close($conn);
}

if(empty($_POST['fullname'])){
    header('location:LoGin.php');
}
?>