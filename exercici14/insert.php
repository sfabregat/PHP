<?php
define('DB_SERVER','vps80486.ovh.net'); 
define('DB_NAME','sfabregat_escola'); 
define('DB_USER','sfabregat_root'); 
define('DB_PASS','linux'); 

$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$nom=$_POST['nom'];
$cognoms=$_POST['cognoms'];
$curs=$_POST['curs'];
echo "INSERTADO!"; 

$sql = "INSERT INTO alumnes (Nom, Cognoms, Curs) VALUES ('$nom', '$cognoms', '$curs')";
$mysqli->query($sql);
?>