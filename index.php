<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index1</title>
</head>
<body>
	<?php 

	echo $_GET['prenom']." ";
	echo $_GET['nom']." ";
	if(isset($age)){

		echo $age;
	}
	else{

		echo "age non renseigné";
	}

	?>
</body>
</html>