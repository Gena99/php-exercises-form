<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo6</title>
</head>
<body>
	<?php
	if($_POST["civilite"] && $_POST["name"] && $_POST["firstName"]){
		echo $_POST["civilite"];
		echo $_POST["name"];
		echo $_POST["firstName"];
		echo $_POST["file"];
	}else{

		echo '<form action="index.php" method= "post">
		<select name = "civilite">
			<option value = "Monsieur">Monsieur</option>
			<option value = "Madame">Madame</option>
		</select>
		<label for ="name">Nom</label>
		<input type="text" name = "name">
		<label for ="firstName"> Prenom</label>
		<input type="text" name="firstName">
		<label for ="fichier"> Fichier</label>
		<input type = "file" name = "file">
		<input type = "submit" value = "envoyer">

	</form>';
}

?>

</body>
</html>
