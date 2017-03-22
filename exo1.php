<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo1</title>
</head>
<body>
	<form action="user.php" method= "GET">
		<label for ='name'>Nom</label>
		<input type="text" name = "name">
		<label for ="firstName"> Prenom</label>
		<input type="text" name="firstName">
		<input type = "submit" value = "envoyer">
	</form>
	<?php
	echo $_GET["name"];
	echo $_GET["firstName"];
	?>

</body>
</html>