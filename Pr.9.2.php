<?php
//Serialization
	
	$s_data=serialize(array('Andriod','Java','C','Swift','Python'));
	print_r($s_data."<br>");
	$us_data=unserialize($s_data);
	print_r($us_data);

/*Output-
a:3:{i:0;s:7:"Welcome";i:1;s:2:"to";i:2;s:3:"PHP";}
Array([0]=>Welcome [1]=>to [2]=>PHP)*/
?>