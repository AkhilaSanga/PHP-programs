<!DOCTYPE html>
<html>
<body>
<?php
class Toys
{
	private $str;
	public function __set($name,$value)
	{
		$this->str[$name]=$value;
	}
	public function __get($name)
	{
		echo "Overloaded Property name= ".$this->str[$name]."<br>";
	}
	public function __isset($name)
	{
		if(isset($this->str[$name]))
		{
			echo "Property \$$name is set ";
		}
		else
		{
			echo "Property ]SSname is not set<br>";
		}
	}
	public function __unset($name)
	{
		unset($this->str[$name]);
		echo "\$$name is unset ";
		
	}
	
}
$obj= new Toys;
/*setters and getters on dyanamic properties*/
$obj->overloaded_property="CAR";
echo $obj->overloaded_property."<br>";
/*Operations with dyanmic properties values*/
isset($obj->overloaded_property);
unset($obj->overloaded_property);
isset($obj->overloaded_property);
?>
</body>
</html>