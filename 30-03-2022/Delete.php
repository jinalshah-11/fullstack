<?php
header('refresh:1');
if(isset($_GET['email']))
{  
    $eemail=$_GET['email'];
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
    $query=mysqli_query($conn,"delete from client where email='$eemail'") or die('error in delete');
    if($query)
    {
        echo "Data is deleted";
        header('location:Dashboard.php');
    }
}
?>