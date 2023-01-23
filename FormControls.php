<?php
if(isset($_POST['submit']))
{
	$n = $_POST['name'];
	$em = $_POST['email'];
	$mob = $_POST['mobile'];
	$gender = $_POST['gender'];
	$yr = $_POST['year'];
	$select = $_POST['select'];

	echo "Name : $n <br><br>";
	echo "Email : $em <br><br>";
	echo "Mobile : $mob <br><br>";
	echo "Gender : $gender <br><br>";
	echo "Year : $year <br><br>";
	echo "Engineering Courses : $select <br><br>";

	if (isset($_POST['subject[]'])) {
		foreach ($_POST['subject[]'] as $subject) {
			print "You selected $subject<br/>";
		}
	}
	else
		echo "Select an option first !!";
}
?>