<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
</head>
<body>
    <form method="post">
        <h1>CRUD Operation</h1>
        <h2>Insert Data</h2>
        Enrollment Number : <input type="number" name="eno" placeholder="Enter Enrollment Number"> <br><br>
        Student Name : <input type="text" name="sname" placeholder="Enter Student Name"><br><br>
        Mobile_Number : <input type="number" name="mobile" placeholder="0000000000"><br><br>
        Division : <input type="text" name="div" placeholder="Enter your Division"><br><br>
        <input type="submit" name="Insert" value="Insert Data">
        <input type="submit" name="view" value="Show Data">
        <input type="submit" name="update" value="Update Data">
        <input type="submit" name="delete" value="Delete Data">
    </form>
</body>
</html>

<?php
if (isset($_POST['Insert'])) 
{
    $eno = $_POST['eno'];
    $sname = $_POST['sname'];
    $mobile = $_POST['mobile'];
    $div = $_POST['div'];
    $conn = mysqli_connect("localhost", "root", "", "CRUD") or die("Error in Database Connection");
    $query = mysqli_query($conn, "Insert into student values($eno,'$sname',$mobile,'$div')") or die("Error in Inserting Query");
    if ($query) 
    {
        echo "Data is Inserted";
    } 
    else 
    {
        echo "Error in Inserting Data";
    }

    mysqli_close($conn);
}
if (isset($_POST['view'])) 
{
    header('Location: Retrieve.php');
}
if(isset($_POST['update'])) 
{
    header('Location: Update.php');
}
if(isset($_POST['delete'])) 
{
    header('Location: Delete.php');
}
?>