<!DOCTYPE html>
<html>
<body>
<?php
class Shape{
	public $length;
	public $width;

	public function __construct($len,$width){
		$this->length=$len;
		$this->width=$width;
	}
	public function intro(){
		echo "The length is ".$this->length." and the width is ".$this->width."<br>";
	}
}
class square extends Shape{
	public $height;

	public function __construct($len,$width,$height){
		$this->length=$len;
		$this->width=$width;
		$this->height=$height;
	}
	public function intro(){
		echo "The length is ".$this->length." and the width is ".$this->width." and height is ".$this->height."<br>";
	}
}
$s=new square(10,30,50);
$s->intro();
?>
</body>
</html>