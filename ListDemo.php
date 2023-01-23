<?php
if(isset($_POST["gender"])){
	echo "<p>Gender: ".$_POST["gender"]."</p>";
}
if(isset($_POST['user_id'])){
	echo "<p>User id: ".$_POST["user_id"]."</p>";
}
if (isset($_POST["city"])) {
	echo "<p>City: ".$_POST["city"]."</p>";
}
?>