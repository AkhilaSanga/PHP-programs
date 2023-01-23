<?php
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	echo "<p>User name is: $name </p>";
	echo "<br>You can use this form again to enter new name";
}
?>

<html>
<head>
	<title>Call same file for Processing</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="text" name="name"><br>
		<input type="submit" name="submit" value="Submit Form"><br>
	</form>
</body>
</html>