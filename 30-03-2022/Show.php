<?php
    echo "<h2> Show Data </h2>";
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Error in Connection");
    $query=mysqli_query($conn,"select * from client") or die("Error in query");
    echo "<table border=2><tr><td>fullname</td><td>email</td><td>user_name</td><td>mobile</td><td> Action </td></tr>";
    while($rows=mysqli_fetch_array($query))
    {
        $eemail=$rows['email'];
        echo "<tr>";
        echo "<td>".$rows["fullname"]."</td>";
        echo "<td>".$rows["email"]."</td>";
        echo "<td>".$rows["user_name"]."</td>";
        echo "<td>".$rows["mobile"]."</td>";
        //echo "<td>".$rows["password"]."</td>";
        echo "<td> " . "<a href=Edit.php?email=$eemail> Edit </a>". " </td>";
        echo "<td> " . "<a href=Delete.php?email=$del> Delete </a>". " </td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
?>