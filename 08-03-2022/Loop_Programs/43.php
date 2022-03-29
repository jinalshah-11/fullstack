<?php
$n=$_POST['first'];
for($i=1;$i<=$n;$i++)
{
    if($i%2==0)
    {
        echo "0,";
    }
    else
    {
        echo "1,";
    }
}
?>