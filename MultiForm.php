<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
	if (!empty($_POST["mail_submit"])){
		echo "Your email id is ".$_POST["email"]."<br>";
	}
	elseif (!empty($_POST["mb_submit"])){
		echo "Your mobile number is ".$_POST["mbno"]."<br>";
	}
}
?>