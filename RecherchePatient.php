<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8"/>
        <title>Test Base de donnée</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>

     <?php //Connection avec la BDD.

		//<!-- On va rechercher un patient --> 
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdchu";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$conn->set_charset("utf8");
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	?>

	<form method="post" action="#" class="formulaire">
      <fieldset>
        <legend>Affichage informations patient</legend> <!-- Titre du fieldset --> 
		
		<select name="ident" id="NomPatient" onchange="javascript:GoAction(\'Nom\',this.value);" required>

	<?php		

		$sql = ' SELECT * FROM patients';
		$result = $conn->query($sql); 

		if ($result->num_rows > 0) {		
			echo ('	<option value="Nom" selected="">Séléction du patient</option>
					<option value="" disabled=""></option>');
			while($donnees = $result->fetch_assoc()) {			
			echo ('<option value="'.$donnees['IdPatient'].'">'.$donnees['Prenom'].' '.$donnees['Nom'].' N°Sécu: '.$donnees['NumSecu'].'</option>');
			}
		} 
		
		else {
		echo ('<option value="Nom" selected="">Il n\'y a aucun patient dans la base de données</option>');
		}	
		
	?>

		</select>
		<input type="submit" value="Afficher">
	   	</fieldset>
		</form>

	<?php
		$ident = isset($_POST['ident']) ? $_POST['ident'] : NULL;

		$sql = ' SELECT * FROM patients 
		INNER JOIN consultations
		ON consultations.fk_IdPatient=patients.idPatient
		INNER JOIN services
		ON consultations.fk_Idservice=services.idService
		WHERE patients.IdPatient = \''.$ident.'\' ';
		
		$result = $conn->query($sql);
		
		// On affiche les lignes du tableau une à une à l'aide d'une boucle
				
		 if ($result->num_rows > 0) {
		echo('<table border="1">
		<colgroup width =150 span=12></colgroup>
		<thead> <!-- En-tête du tableau -->
		<tr>
		<th>Identification patient</th>
		<th>Nom patient</th>
		<th>Prenom patient</th>
		<th>Date de naissance</th>
		<th>Adresse postale</th>
		<th>Numero de secu</th>
		<th>Email</th>
		<th>Date de consultation</th>
		<th>Heure de consultation</th>
		<th>Nom du service</th>
		<th>But de la consultation</th>
		</tr>
		</thead>
		<tbody> <!-- Corps du tableau --> ');
		while($donnees = $result->fetch_assoc()) {
		echo ('<tr>');
		echo ('<td>'.$donnees['IdPatient'].'</td>');
		echo ('<td>'.$donnees['Nom'].'</td>');
		echo ('<td>'.$donnees['Prenom'].'</td>');
		echo ('<td>'.$donnees['DateNaissance'].'</td>');
		echo ('<td>'.$donnees['AdressPostale'].'</td>');
		echo ('<td>'.$donnees['NumSecu'].'</td>');
		echo ('<td>'.$donnees['Email'].'</td>');
		echo ('<td>'.$donnees['DateConsul'].'</td>');
		echo ('<td>'.$donnees['HeureConsul'].'</td>');
		echo ('<td>'.$donnees['NomService'].'</td>');
		echo ('<td>'.$donnees['ButConsul'].'</td>');
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