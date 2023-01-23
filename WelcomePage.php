<?php
if(isset($_POST['submit']))
{
	$n = $_POST['name'];
	$em = $_POST['email'];
	$mob = $_POST['mobile'];
	$gender = $_POST['gender'];
	$hobbies = $_POST['hobby'];

	echo "Name : $n <br><br>";
	echo "Email : $em <br><br>";
	echo "Mobile : $mob <br><br>";
	echo "Gender : $gender <br><br>";

	echo "<h3>Hobbies</h3>";

	$i = 0;

	while($i < sizeof($hobbies))
	{
		echo $hobbies[$i]."<br>";
		$i++;
	}
}
?>