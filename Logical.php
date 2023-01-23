<!DOCTYPE html>
<html>
<body>
	<?php
		$a = 100; //$x =100
		$s = 50; //50

		if($a == 100 and $s == 50){
			echo "Akshi";
		}
		echo "<br>";
		if($a == 100 or $s == 80){
			echo "Maharum";
		}
		echo "<br>";
		if($a == 100 xor $s == 80){
			echo "Sonchi";
		}
		echo "<br>";
		if($a == 100 && $s == 50){
			echo "Sanika";
		}
		echo "<br>";
		if($a == 100 || $s == 80){
			echo "PHP";
		}
		echo "<br>";
		if($a == 100 xor $s == 80){
			echo "CPP";
		}
		echo "<br>";
		if($a !== 90){
			echo "JAVA";
		}
		echo "<br>";
	?>
</body>
</html>