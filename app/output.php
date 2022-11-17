<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Result</h2>
<?php 
$s = $_POST['name'];
$fh = fopen("a.txt","r")or die("Can't open file");
while(!feof($fh))
{
$line = fgets($fh);
$a = trim($line);
}
if (strcmp($s,$a) == 0)
print ("<h1>" . $s . " is in the list</h1><br>");
fclose($fh);
print ("<h1>" . $s . " is not in the list</h1><br>");
?>
<form method="post" action="index.php"> 
	
  <input type="submit" name="submit" value="Back">  
</form>
</body>

</html>