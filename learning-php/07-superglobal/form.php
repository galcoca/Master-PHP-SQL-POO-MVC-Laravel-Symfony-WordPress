<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>PHP Form</title>
	</head>
	<body>
		<h1>PHP Form</h1>
		<form method="POST" action="getData.php">
			<p>
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" />
			</p>
			
			<p>
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" />
			</p>
			
			<input type="submit" value="Send"/>
		</form>
	</body>
</html>
