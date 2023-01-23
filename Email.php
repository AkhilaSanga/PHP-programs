<?php
$to = "xyz@abcdomain.com";
$subject = "This is subject";
$message = "<p>This is HTML message</p>";
$header = "From: abc@xyzdomain.com\r\n";
$header.="Cc: pqr@xyzdomain.com\r\n";
$header.="MIME-Version: 1.0\r\n";
$header.="Content-type: text/html";
$retvalue = mail($to, $subject, $message, $header);
if ($retvalue == true) {
	echo "Message sent successfully";
}
else{
	echo "Message could not sent";
}
?>