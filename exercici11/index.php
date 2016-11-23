<?php

if (isset($_POST) && !empty($_POST)) {
	$arxiu= fopen("../exercici11/dades.txt", "w");
	fputs($arxiu, $_POST['nom']);
	fputs($arxiu, $_POST['cognom']);
	fputs($arxiu, $_POST['comentaris']);
	fclose($arxiu);
	echo "Done";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>exercici 11</title>
</head>
<body>
<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
<span>Nom</span><input type="text" name="nom">
<span>Cognom</span><input type="text" name="cognom">
<span>Comentaris</span><input type="text" name="comentaris">
<input type="submit" name="insertar" value="insertar">

</form>


</body>
</html>