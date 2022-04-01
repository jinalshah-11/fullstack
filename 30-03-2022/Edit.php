<?php
if(isset($_GET['email']))
{
    $e=$_GET['email'];
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
    $query=mysqli_query($conn,"select * from client where email='$e'") or die('Error in Edit Query');
    while($rows=mysqli_fetch_array($query))
    {
        $fullname=$rows['fullname'];
        $uname=$rows['user_name'];
        $email=$rows['email'];
        $mobile=$rows['mobile'];
        $password=$rows['password'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit</title>
</head>
<body>
<form method="post">
Enter Full Name : <input type="text" name="fullname" value="<?php echo $fullname?>" placeholder="Enter FullName"><br><br>
Enter UserName : <input type="text" name="uname" value="<?php echo $uname?>" placeholder="Enter UserName"><br><br>
Enter Email : <input type="text" name="email" value="<?php echo $email?>" placeholder="Enter Email" disabled><br><br>
Enter Mobile : <input type="number" name="mobile" value="<?php echo $mobile?>" placeholder="Enter Mobile"><br><br>
Enter Password : <input type="text" name="password" value="<?php echo $password?>" placeholder="Enter Password"><br><br>
<input type="submit" name="update" value="Update">
</form>
</body>
</html>

<?php
if(isset($_POST['update']))
{
    $fullname=$_POST['fullname'];
    $username=$_POST['uname'];
    //$email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
    $query=mysqli_query($conn,"Update client set fullname='$fullname',user_name='$username',mobile=$mobile,password='$password' where email='$email'") or die('Error in Update');
    if($query)
    {
        echo "Data Updated";
        header('location:LoGin.php');
    }
    else
    {
        echo "Error in Updating";
    }
}
?>
