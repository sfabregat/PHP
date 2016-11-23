<?php

/**
*	@author Sergio
*
*	Exercici 5
*/

	//Definim una variable amb un numero aleatori entre 1 i 3.
	$valor = rand (1,3);
	
	//posem les condicions per que guardi en la cadena result en nombre resultant.
	if ($valor == 1)
	{
		$result = 'un';
	}
	else if ($valor == 2)
	{
		$result = 'dos';
	}	
	else if ($valor == 3)
	{
		$result = 'tres';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici5</title>
</head>
<body>

<h1><?= $result; ?></h1>

</body>
</html>