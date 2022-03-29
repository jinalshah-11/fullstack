<form method="POST">
        <label>Program to print all the prime numbers among 1 to n.</label>
        <br><br>
        Enter Number :<input type="text" name="first">
        <br><br>
        <input type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_REQUEST["submit"]))
{
    $num = $_POST["first"];

    for($i=0;$i<$num;$i++)
    {
        $temp=1;
        for($j=2;$j<intval($i/2)+1;$j++)
        {
            if($i%$j==0)
            {
                $temp=0;
                break;
            }
        }
        if($temp==1)
        {
            echo "$i is a Prime Number";
            echo "<br><br>";
        }
    }
}
?>