<!DOCTYPE html>
<html>
<head>
    <title>Query String</title>
</head>
<body>
    <form method="POST">
        First value :  <input type="text" name="first"><br><br> 
        Second value : <input type="text" name="second"><br><br>
        <input type="submit" name="Add" value="Add">
        <input type="submit" name="Subtract" value="Subtract">
        <input type="submit" name="Multiply" value="Multiply">
        <input type="submit" name="Divide" value="Divide">
    </form>
</body>
</html>

<?php
if(isset($_POST['Add']))
{
    $a=$_POST['first'];
    $b=$_POST['second'];
    echo "<a href=query-string2.php ? first=$a & second=$b & btn1=Add> <br> Edit </a>";
}
if(isset($_POST['Subtract']))
{
    $a=$_POST['first'];
    $b=$_POST['second'];
    echo "<a href=query-string2.php ? first=$a & second=$b & btn1=Subtract> <br> Edit </a>";
}
if(isset($_POST['Multiply']))
{
    $a=$_POST['first'];
    $b=$_POST['second'];
    echo "<a href=query-string2.php ? first=$a & second=$b & btn1=Multiply> <br> Edit </a>";
}
if(isset($_POST['Divide']))
{
    $a=$_POST['first'];
    $b=$_POST['second'];
    echo "<a href=query-string2.php ? first=$a & second=$b & btn1=Divide> <br> Edit </a>";
}
?>