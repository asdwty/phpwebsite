<!DOCTYPE html>
<html>
<body>

<?php
    if($_GET){
		echo "<h2>You have Search for ";
        echo $_GET['search'];    
		echo "</h2>";
    }
?>

<form method="post" action="index.php"> 
  
  <input type="submit" name="submit" value="Back">  
</form>
</body>

</html>
