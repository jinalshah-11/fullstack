<?php
    echo "<h2> Show Data </h2>";
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
    $query=mysqli_query($conn,"select * from student") or die("Error in query");
    echo "<table border=2><tr><td>Enrollment Number</td><td>Student Name</td><td>Mobile_Number</td><td>Division</td></tr>";
    while($rows=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>".$rows["enroll_no"]."</td>";
        echo "<td>".$rows["student_name"]."</td>";
        echo "<td>".$rows["mobile_no"]."</td>";
        echo "<td>".$rows["division"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
?>