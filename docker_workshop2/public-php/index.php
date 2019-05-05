 <?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];

$file = fopen("aaa.txt",'w') or die("File not open");
fputs($file,$name) or die("file not write");
fclose($file);
}
?>
<center>
<form action="#" method="post">
Name:<input type="text" name="name"><br>
<input type="submit" name="submit" value="Write to file"><br>
</form>
</center> 
