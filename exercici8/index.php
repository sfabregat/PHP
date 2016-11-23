<?php

/**
*	@author Sergio
*
*	Exercici 8
*/

//Definim l'array i el balor a buscar
 $array = array();
 $valor = 98;
 $result = false;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici8</title>
</head>
<body>
  	<?php
  	echo 'El valor a buscar es '.$valor.'<br>';

  	//Afegim els valors al final de l'array amb array_push
	for ($i = 0; $i <= 100; $i++) 
	{
		array_push($array, rand (1,100));
	}

	//mostrem per pantalla els numeros de l'array
	foreach($array as $num => $value)
	{
		echo $num.' => '.$value.'<br>';
		if($value==$valor)
		{
			$result=true;
		}
	}

	//Comprobem si s'ha trobat el numero

	if($result==true)
	{
		echo "S'ha trobat el numero";
	}
	else
	{
		echo "No s'ha trobat el numero";
	}

?>
</body>
</html>