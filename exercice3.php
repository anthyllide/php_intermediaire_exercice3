<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-Type"/>
<title>Exercice 3</title> 
<link href="astyle.css" rel="stylesheet" type="text/css"/ media="screen">
</head>
<body>
<?php
/* connexion à la base de données en utilisant l'objet $bdd à partir de la classe PDO */
try
{
$bdd = new PDO ('mysql:host=localhost; dbname=projet_villes', 'root', '');
}
catch (Exception $e) 
{
die ('erreur : ' .$e -> getMessage());
}

$donnees = $bdd -> query ('SELECT * FROM villes');

while ($row = $donnees -> fetch())
{

$table [$row ['id']]= $row ['villes_nom'];

}

$donnees -> closeCursor();
?>
<table>
<thead>
	<tr>
		<th>id</th>
		<th>Villes</th>
	</tr>
</thead>
<tbody>

	<tr>
<?php

foreach ($table as $key => $value)
{

?>

		<td><?php echo $key; ?></td>
		<td><?php echo $value; ?></td>		
	</tr>
	
<?php

}

endforeach

?>

</tbody>
</table>

</body>
</html>