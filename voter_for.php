<!DOCTYPE html>
<html>
<head>
	<title>Vote for Candidate</title>
</head>
<body>
	<form method="post" action="voter_info.php">
		<label>Voter Name</label><input type="text" name="v_name"/><br>
		<label>Address</label><textarea name="address"></textarea>/><br>
		<label>Mobile No.</label><input type="text" name="mobno"/><br>
		<label>Vote for Candidate</label><br>
		<label>1.Sonal 2.Prachi 3.Sanika</label><input type="text" name="candidate"/><br>

		<input type="submit" value="submit">
	</form>
	<form method="post" action="voter_data.php">
		<input type="submit" value="See Voter Data">
	</form>
</body>
</html>