<label>Program to Sort a List of Names in Alphabetical Order </label>
<form method="POST">
    <label for="string">Enter String :</label>
    <input type="text" name="string" id="string" required />
    <input type="submit" name="submit" value="Sort" />
</form>
<?php 
if ( isset($_POST["submit"]) ) 
{
    $string = $_POST["string"];
    echo "Original String : $string<br>";
    $arr = str_split($string);
    sort($arr);
    $result = implode($arr);
    echo "Sorted String : $result";
}
?>