<?php

/**
*	@author Sergio
*
*	Exercici 1
*/
	//desem a variacble $d el valor del dia del mes
	$d=date('d');
	if($d<=10)
	{
		$msg='La pagina esta abierta';
	}
	else
	{
		$msg='Lloc fora de servei';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici1</title>
	<link rel='stylesheet' href="css/estil.css">
</head>
<body>
<h1><?= $msg; ?></h1>
</body>
</html>