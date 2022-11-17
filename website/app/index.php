<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  if ( ctype_alpha($name)) { 
       header("Location: output.php?search=".$name);
	   exit;
  }
  else {
       header("Location: index.php");
	   exit;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Search: <input type="text" name="name">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
