<?php

echo 'Informations récupérées dans le $_REQUEST quelque soit la méthode : ';
echo $_REQUEST["name"];
echo $_REQUEST["firstName"];

echo "<br/><br/> Méthode utilisée dans le formulaire pour appeler la page : ".$_SERVER['REQUEST_METHOD']."<br/>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo 'Informations récupérées dans le $_POST : ';
	echo $_POST["name"];
	echo $_POST["firstName"];
}
else{
	echo 'Informations récupérées dans le $_GET : ';
	echo $_GET["name"];
	echo $_GET["firstName"];
}
?>