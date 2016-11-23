<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Exercici13</title>
</head>
<body>
	<form method="POST" action="impostos.php">
		<p>NOM:<input type="text" name="nom"></p>
		<p>Ingresos: <select name="options">
		<option value="num1">Menys de 1000</option>
		<option value="num2">Entre 1001-3000</option>
		<option value="num3">Mes 3001 </option>
		<input type="submit" name="insertar" value="insertar">
		</select>
	</form>
</body>
</html>