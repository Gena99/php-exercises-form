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
		echo "<i>" . $_POST["civilite"] . " " . $_POST["name"] . " " . $_POST["firstName"] . '</i><br/>';


		echo "Nom du fichier : <i>" . $_POST["file"] . "</i><br />";
		$tableau = explode('.', $_POST["file"]);
		$extension = "." . array_pop($tableau);
		echo "Extension : <i>" . $extension . "</i><br/>";
		if(strtolower($extension)==='.pdf'){
			echo "L'extension est un PDF ";
		}else{
			echo"Ce n'est pas un fichier pdf";
		}
		
		
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
		<label for ="fichier"> Fichier</label>
		<input type = "file" name = "file">
		<input type = "submit" value = "envoyer">
	</form>';
}
?>

</body>
</html>
