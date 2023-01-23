<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if(isset($_POST["addbtn"])){
			echo "Addition of these two number is ".((int)$_POST["no1"]+(int)$_POST["no2"])."<br>";
		}
		elseif (isset($_POST["subbtn"])) {
			echo "Subtraction of these two number is ".((int)$_POST["no1"]-(int)$_POST["no2"])."<br>";
		}
	}
?>