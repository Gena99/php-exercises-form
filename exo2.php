<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo2</title>
</head>
<body>
	<form action="user.php" method= "post">
		<label for ='name'>Nom</label>
		<input type="text" name = "name">
		<label for ="firstName"> Prenom</label>
		<input type="text" name="firstName">
		<input type = "submit" value = "envoyer">
	</form>
	<?php
	echo $_POST["name"];
	echo $_POST["firstName"];
	?>

</body>
</html>