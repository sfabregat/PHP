<?php
if (isset($_POST) && !empty($_POST)) {
	$options=$_POST['options'];
	if ($options=='num3') {
		echo "Si has de pagar";
	}else{
		echo "No has de pagar";
	}
}
?>