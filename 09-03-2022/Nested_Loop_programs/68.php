<form method="POST">
        <label>Program to find the sum of digits of an integer number.</label>
        <br><br>
        Enter Number :<input type="text" name="first">
        <br><br>
        <input type="submit" name="submit">
</form>
<?php
if(isset($_REQUEST["submit"]))
{
        $num=$_POST['first'];
        $sum=0; 
        $remainder=0;  
        echo "Number is $num " ;
        echo"<br>";
        
        for ($i =0; $i<=strlen($num);$i++)  
        {  
        $remainder=$num%10;  
        $sum = $sum + $remainder;  
        $num=$num/10;  
  }  
        echo "Sum of digits of integer number is " .$sum;  
}     
?>