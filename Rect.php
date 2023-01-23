<?php 
	class Rectangle{
		public $length,$width;
		public $a,$b;
	
		function area($l, $w){
			$this->length=$l;
			$this->width=$w;
			$area = $l*$w;
			echo "Area of Rectangle : ",$area;
			echo "<br>";
		}
		function perimeter($a, $b){
			$this->a=$a;
			$this->b=$b;
			$perimeter = 2*($a + $b);
			echo "Perimeter of Rectangle : ",$perimeter;
			echo "<br>";
		}
	}
	$s = new Rectangle();
	$s -> area(10,5);
	$s -> perimeter(10,5);
?>