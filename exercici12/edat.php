<?php
if (isset($_POST) && !empty($_POST)) {
	$edat= $_POST['edat'];
	$nom=$_POST['nom'];
	if ($edat<18) 
	{
		echo " Es menor de edad";
	}
	else if ($edat==18) 
	{
		echo " Te 18";
	}else if ($edat>18) 
	{
		echo " Es major d'edat";
	}
}
?>