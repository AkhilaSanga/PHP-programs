<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name = $_POST ["name"];
	if (!preg_match("/^[a-zA-z]*$/", $name)) {
		$ErrMsg = "Only alphabets and whitespace are allowed.";
		echo $ErrMsg;
		echo "<br>";
	}
	else{
		echo $name;
		echo "<br>";
	}
	$email = $_POST ["email"];
	$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
	if(!preg_match($pattern, $email)){
		$ErrMsg = "Email is not vaild.";
		echo $ErrMsg;
		echo "<br>";
	}
	else{
		echo "Your vaild address is: ".$email."<br>";
	}
	$mobileno = $_POST ["mobileno"];
	if (!preg_match("/^[0-9]*$/", $mobileno)) {
		$ErrMsg = "Only numeric value is allowed.";
		echo $ErrMsg;
		echo "<br>";
	}
	else{
		echo $mobileno;
	}
}
?>