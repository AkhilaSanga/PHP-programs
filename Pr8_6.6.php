<!DOCTYPE html>
<html>
<body>
<?php 
	class MyClass{
		public $color;
		public $amount;
	}

	$obj = new MyClass();
	$obj->color = "red";
	$obj->amount = 10;
	$copy = clone $obj;
	print_r($copy);
?>
</body>
</html>