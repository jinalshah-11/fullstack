<!DOCTYPE html>
<html>
<head>
    <title> PHP String Functions </title>
</head>
<body>
    <form method="POST">
        <label>String Functions<br><br></label>
        Enter String : <input type="text" name="string">
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $str=$_POST['string'];
    echo "Entered String is :".$str;
    echo "<br><br>";
    echo "Length of String is : ".strlen($str);
    echo "<br><br>"; 
    echo "Split String : "; 
    print_r(str_split($str));
    echo "<br><br>"; 
    echo str_word_count($str);
    echo "<br><br>";
    echo "Converting String to Lower Case : ".strtolower($str);
    echo "<br><br>";  
    echo "Converting String to Upper Case : ".strtoupper($str);
    echo "<br><br>";  
    echo "Converting First Character String to Upper Case : ".ucfirst($str);
    echo "<br><br>";  
    echo "Converting First Character String to Lower Case : ".lcfirst($str);
    echo "<br><br>";
    echo "Converting First Character of each word to Upper Case : ".ucwords($str);
    echo "<br><br>";   
    echo "Reverse of a String : ".strrev($str);
    echo "<br><br>";
    print_r (explode(" ",$str));
    echo "<br><br>";
    echo wordwrap($str,5,TRUE);
}
?>