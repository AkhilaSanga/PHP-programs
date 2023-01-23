<!DOCTYPE html>
<html>
<body>
<?php
	final class A{
		public function disp(){
			echo "Inside the parent class";
		}
	}
	class B extends A{
		function disp(){
			echo "Inside the child class";
		}
	}
	$obj=new B();
	$obj->disp();
?>
	//Output: Fatal error: class B may not extend from final class (A)*/
</body>
</html>