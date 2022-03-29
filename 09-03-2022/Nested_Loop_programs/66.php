<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Program to print all the Palindrome numbers among 1 to 100.</label>
    <br><br>
    Enter Number :<input type="text" name="first">
    <br><br>
    <input type="submit" value="Palindrome">
</form>

<?php
if(isset($_POST["submit"]))
{
$num=100;
$n=2;
$temp=$num;
for($i=1;$i<=$num;$i++)
{
    while($temp>0)
    {
        $d=$temp%10;
        $n=$n*10+$d;
        $temp=(int)($temp/10);
    
    }
    if($i==$n)
        echo $n." is palindrome";
        echo "<br>";
}
}
?>