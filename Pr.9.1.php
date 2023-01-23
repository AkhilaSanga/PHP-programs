<?php
//Introspection
	
	if(class_exists('Demo'))
	{
		$demo=new Demo();
		echo "This is Demo class";
	}
	else
	{
		echo "Class does not exists";
	}

/*Output-
Class does not exists*/
?>