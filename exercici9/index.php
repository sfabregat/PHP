<?php

/**
*	@author Sergio
*
*	Exercici 9
*/

//Definim la ruta
$dir = "fotos/";

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici9</title>
</head>
<body>
<table border =1>
	<tr>
  	<?php

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
        	if($file != '.' AND $file != '..')
        	{
            	echo '<td><img src="fotos/'.$file.'" style="width:100px;height:100px;"></td>';
            }
        }
        closedir($dh);
    }
}

?>
</tr>
</table>
</body>
</html>