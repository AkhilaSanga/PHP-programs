<!DOCTYPE html>
<html>
<body>
	<form method="post">
		Width: <input type="number" name="width"><br><br>
		
		Length: <input type="number" name="length"><br>

		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$width = $_POST['width'];
		$length = $_POST['length'];
		$area = $width * $length;
		$perimeter = 2*($length + $width);

		echo "The Area of Rectangle with $width x $length is $area<br>";
		echo "The Perimeter of Rectangle with $width x $length is $perimeter";
	}
?>