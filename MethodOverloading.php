<?php
class Vibes{
	public function greet(){
		return "Good!<br>";
	}
}
class Morning extends Vibes{
	public function greet(){
		return "Morning!";
	}
}
$vibes = new Vibes();
echo $vibes->greet();

$morning = new Morning();
echo $morning->greet();
?>