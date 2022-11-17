<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
$s = $_POST['name'];
print ("<h1>Search Result for" . $s . "</h1><br>");
?>
<form method="post" action="index.php"> 
  
  <input type="submit" name="submit" value="Back">  
</form>
</body>

</html>
