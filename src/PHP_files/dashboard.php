<?php 
require "loginCheck.php"

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashobaord</title>
</head>
<body>
	Welcome <?php echo $_SESSION["email"];?>
</body>
</html>
