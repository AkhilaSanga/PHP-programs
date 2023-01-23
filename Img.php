<!DOCTYPE html>
<html>
<body>
<?php
	header("Content-type:image/png");
	$handle=ImageCreate(130,50);
	$bg_color=ImageColorAllocate($handle,240,240,140);
	$txt_color=ImageColorAllocate($handle,0,0,0);
	ImageString($handle,5,5,18,"Welcome to PHP",$txt_color);
	imagepng($handle);
?>
</body>
</html>