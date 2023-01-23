<!DOCTYPE html>
<html>
<body>
	<?php
		class Employee{
			public $name;
			public $position;
			function __construct($name,$position){
				$this->name = $name;
				$this->profile = $position;
			}
			function show_details(){
				echo $this->name." : ";
				echo "Your position is ".$this->profile."<br>";
			}
		}

		$employee_obj = new Employee("Akhila","Developer");
		$employee_obj->show_details();

		$employee2 = new Employee("Sakshi","Manager");
		$employee2->show_details();
	?>
</body>
</html>