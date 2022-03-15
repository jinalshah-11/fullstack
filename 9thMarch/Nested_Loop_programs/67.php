<form method="POST">
        <label>Program to print all the Armstrong Numbers between the Range of integer</label>
        <br><br>
        Enter Number 1 :<input type="text" name="first">
        <br><br>
        Enter Number 2 :<input type="text" name="second">
        <br><br>
        <input type="submit" name="submit">
</form>

<?php

if(isset($_REQUEST["submit"]))
{
    $num1=$_POST['first'];
    $num2=$_POST['second'];
		$sum=0;
		print("Armstrong numbers between $num1 to $num2 are: ");
        echo"<br><br>";
	    
		for($i=$num1; $i<=$num2; $i++)
		{
			$num=$i;
			$sum=0;
			$len=strlen($i); 
			while($num>0)
			{
			   $rem=$num%10;
			   $power=pow($rem,$len);
			   $sum=$sum+$power; 
			   $num=$num/10;  
			}
			if($sum==$i)
			{
				echo $i . " is armstrong number <br>";
			}			
		}	
}	
?>