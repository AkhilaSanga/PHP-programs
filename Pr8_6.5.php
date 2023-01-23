<!DOCTYPE html>
<html>
<body>
<?php
	class A{
		final public function disp(){
			echo "Inside the Parent class";
		}
	}
	class B extends A{
		function disp(){
			echo "Inside child class";
		}
	}
	$obj=new B();
	$obj->disp();
?>

//Output- Cannot override final method A::disp()
</body>
</html>