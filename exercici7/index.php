<?php

/**
*	@author Sergio
*
*	Exercici 7
*/

//Definim la constant TAM
define('TAM', '10');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici7</title>
</head>
<body>
	<table border=1>
  	<?php
	
	for ($i = 1; $i <= 10; $i++) 
	{
		if($i%2==1)
		{
			echo '<tr><td bgcolor="yellow">'.$i.' x 10 = '.($i*TAM).'</td></tr>';
		}
 	   	else
 	   	{
 	   		echo '<tr><td bgcolor="red">'.$i.' x 10 = '.($i*TAM).'</td></tr>';
 	   	}
	}

?>
  </tr>
</table>
</body>
</html>