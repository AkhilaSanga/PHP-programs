<?php
//Start the session
session_start();
?>

<html>
<body>

<?php
//Set session variables
$_SESSION["favcolor"]= "Purple";
$_SESSION["favanimal"] = "Dog";
echo "Session variables are set.<br>";
echo "Fav Color: ".$_SESSION["favcolor"]."<br>";
echo "Fav Animal: ".$_SESSION["favanimal"]."<br>";
?>

</body>
</html>