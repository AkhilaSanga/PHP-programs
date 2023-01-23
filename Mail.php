<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(!empty($_POST["mail_submit"])){
		echo "Your email id is ".$_POST["email"]."<br>";
	}
}
?> 