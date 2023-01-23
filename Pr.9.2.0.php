<?php
class Sample {
	public $one = 1;

	public function show_one() {
		echo $this->one;
	}

	public function __sleep() {
		echo "Sleep() <br>";
		return array('one');
	}

	public function __wakeup() {
		echo "Wake Up <br>";
	}
}

$obj = new Sample;
//Serialization
$ser = serialize($obj);
echo "$ser <br>";
//Unserialization
$unser = unserialize($ser);
print_r($unser);
?>