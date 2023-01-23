<?php
	class A{
		var $v1 = 1;
		var $v2 = true;

		function a1(){}
		function a2(){}
	}
	class B extends A{
		var $v3;

		function b1(){}
		function b2(){}
	}
	$a = new A();
	if(class_exists('A')){
		echo "Class: A <br>";

		echo "Method of A: ";
		print_r(get_class_methods('A'));
		echo "<br>";

		echo "Properties of A: ";
		print_r(get_class_vars('A'));
		echo "<hr>";
	}
	else{
		echo "Class does not Exits!";
	}

	$b = new B();
	if(class_exists('B')){
		echo "Class: B <br>";

		echo "Method of B: ";
		print_r(get_class_methods('B'));
		echo "<br>";

		echo "Properties of B: ";
		print_r(get_class_vars('B'));
	}
	else
		echo "Class does not Exits!";
?>