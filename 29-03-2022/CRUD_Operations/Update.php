<!-- <html>
<head>
<title>Update data</title>
</head>
<body>
<form method="post">
<h2>Update Data</h2>
Enrollment_Number : <input type="number" name="eno" value="<?php echo $enroll_no ?>" /><br/><br/>
<input type="submit" name="find" value="Find Data" />
</form>
</body>
</html> -->
<?php
$eno=11;
$conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
$query=mysqli_query($conn,"select * from student where enroll_no=$eno") or die("Error in query");
while($rows=mysqli_fetch_array($query))
{
    $eno=$rows["enroll_no"];
    $sname=$rows["student_name"];
    $mobile=$rows["mobile_no"];
    $div=$rows["division"];
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update data</title>
</head>
<body>
    <form method="post">
        
        Enrollment_Number : <input type="text" name="eno" value="<?php echo $eno ?>"><br><br>
        Student_Name : <input type="text" name="sname" value="<?php echo $sname ?>"><br><br>
        Mobile_Number : <input type="text" name="mobile" value="<?php echo $mobile ?>"><br><br>
        Division : <input type="text" name="div" value="<?php echo $div ?>"><br><br>
        <input type="submit" name="update" value="Update Data">
    </form>
</body>
</html>

<?php
if (isset($_POST['update'])) 
{
    $enrollment_no=$_POST['eno'];
    $stu_name = $_POST['sname'];
    $mobile_num = $_POST['mobile'];
    $divi = $_POST['div'];
    $conn = mysqli_connect("localhost", "root", "", "CRUD") or die("Error in Connection");
    $query = mysqli_query($conn, "Update student set student_name='$stu_name',mobile_no=$mobile_num, division='$divi' where enroll_no=$eno") or die("Error in Query");
    if ($query) 
    {
        echo "Data Updated";
    } 
    else 
    {
        echo "Error in Updating";
    }
    mysqli_close($conn);
}
?>