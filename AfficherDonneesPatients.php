<?php
/* 
<!-- On va afficher les consultations de date à date dans un tableau dans cet exemple --> 


*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8"/>
        <title>Test Base de donnée</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
	
        <?php //Connection avec la BDD.
				
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdchu";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM consultations 
		INNER JOIN services
		ON consultations.fk_IdService=services.IdService
		INNER JOIN patients
		ON consultations.fk_IdPatient=patients.IdPatient
		WHERE consultations.DateConsul 
		BETWEEN '2017-01-01' AND '2017-03-06'";
		$result = $conn->query($sql);
		
		//On affiche les lignes du tableau une à une à l'aide d'une boucle
				
		if ($result->num_rows > 0) {
		echo('<table border="1">
		<colgroup width =150 span=12></colgroup>
		<thead> <!-- En-tête du tableau -->
		<tr>
		<th>Date de la consultation</th>
		<th>Motif de la consultation</th>
		<th>Nom du service consulté</th>
		<th>Nom du patient</th>
		<th>Prénom du patient</th>
		</tr>
		</thead>
		<tbody> <!-- Corps du tableau --> ');
		while($donnees = $result->fetch_assoc()) {
		echo ('<tr>');
		echo ('<td>'.$donnees['DateConsul'].'</td>');
		echo ('<td>'.$donnees['ButConsul'].'</td>');
		echo ('<td>'.$donnees['NomService'].'</td>');
		echo ('<td>'.$donnees['Nom'].'</td>');
		echo ('<td>'.$donnees['Prenom'].'</td>');
		echo('</tr>');
		}
		echo('<tbody>');
		echo('</table>');
		} else {
		echo "0 results";
		}
		$conn->close();
		
		?>
    </body>
</html>