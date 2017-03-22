<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo5</title>
</head>
<body>
	<form action="index.php" method= "post">
		<select>
			<option value = "Monsieur">Monsieur</option>
			<option value = "Madame">Madame</option>
		</select>
		<label for ='name'>Nom</label>
		<input type="text" name = "name">
		<label for ="firstName"> Prenom</label>
		<input type="text" name="firstName">
		<input type = "submit" value = "envoyer">
	</form>
	<?php
	echo $_POST["civilite"];
	echo $_POST["name"];
	echo $_POST["firstName"];
	?>

</body>
</html>