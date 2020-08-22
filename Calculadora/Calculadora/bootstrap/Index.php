<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
	</head>
	<body>
		<h1>Calculadora Piola</h1>
		<form action="app.php" method="post">
			<select name="operador">
				<option value="suma">+</option>
				<option value="resta">-</option>
				<option value="multiplicacion">x</option>
				<option value="division">/</option>
			</select><br />
			Primer Numero:<br />
			<input type="text" name="numero1"><br />
			Segundo Numero:<br />
			<input type="text" name="numero2"><br>
			<input type="reset" value="CE">
			<input type="submit" value="=">
		</form>
	</body>
</html>