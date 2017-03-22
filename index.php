<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo5</title>
</head>
<body>
	
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		echo 'Informations récupérées dans le $_POST : <br/>';
		echo $_POST["civilite"] . " " . $_POST["name"] . " " . $_POST["firstName"];
	}else{
		echo ' <form action="index.php" method= "post">
		<select name="civilite">
			<option value = "Monsieur">Monsieur</option>
			<option value = "Madame">Madame</option>
		</select>
		<label for ="name">Nom</label>
		<input type="text" name = "name">
		<label for ="firstName"> Prenom</label>
		<input type="text" name="firstName">
		<input type = "submit" value = "envoyer">
	</form>';
}


?>



</body>
</html>
