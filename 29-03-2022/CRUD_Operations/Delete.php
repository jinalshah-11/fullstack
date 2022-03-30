<?php
$conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
$query=mysqli_query($conn,"delete from student where enroll_no=36") or die("Error in Query");
if($query)
{
    echo "Data Deleted";
}
else
{
    echo "Error in Deleting";
}
mysqli_close($conn);
?>