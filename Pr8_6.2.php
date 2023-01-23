<!DOCTYPE html>
<html>
<body>
<?php
class addition{
//__call magic function
function __call($name_of_function,$args)
{
	if($name_of_function=='add')
	{
		switch(count($args))
		{
		case 1:
			return $args[0];
		case 2:
			return $args[1]+$args[0];
		case 3:
			return $args[2]+$args[1]+$args[0];
		}
	}
}
}
$s=new addition;
echo("Return one value: ".$s->add(10)."<br>");
echo("Return two values: ".$s->add(10,20)."<br>");
echo("Return three values: ".$s->add(10,20,30)."<br>");
?>
</body>
</html>