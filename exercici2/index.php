<?php

/**
*	@author Sergio
*
*	Exercici 2
*/

	//posem un numero aleatori entre 1 i 100 a la variable num.
	$num = rand (1,100);
	if($num>50)
	{
		$msg='Es mes gran que 50';
	}
	if($num==50)
	{
		$msg='Es igual a 50';
	}
	if($num<50)
	{
		$msg='Es mes petit que 50';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici2</title>
</head>
<body>
<h1><?= $num; ?></h1>
<hr>
<?= $msg; ?>

</body>
</html>