<!DOCTYPE html>
<html>
<body>
	<center>
		<h1 style="color:green">Multiplication Program</h1>
		<form method="post">
			Enter a number:
			<input type="text" name="number">
			<input type="submit" value="Get Multiplication Table">
		</form>
	</center>
</body>
</html>

<?php
if($_POST){
	$num = $_POST["number"];

	echo nl2br("<p style='text-align: center;'>Multiplication Table of $num: </p>");

	for($i = 1; $i <= 10; $i++){
		echo ("<p style='text-align: center;'>$num"." x "." $i "." = ".$num * $i."</p>");
	}
}
?>