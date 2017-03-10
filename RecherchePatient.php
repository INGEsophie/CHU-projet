<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8"/>
        <title>Test Base de donnée</title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
	<?php 
	include("header.html"); 
	?>
     <?php 

		// Connection à la base de données
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdchu";

		// Creation de la connection

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Gestion des accents

		$conn->set_charset("utf8");

		// Vérificaiton de la connection

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	?>

	<!-- Création du formulaire -->

	<form method="post" action="#" class="formulaire">
      <fieldset>
        <legend>Affichage informations patient</legend>
		
		<select name="ident" id="NomPatient" onchange="javascript:GoAction(\'Nom\',this.value);" required>

	<?php		

		// On génère la liste des patients

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

		// Récupération de toutes les données concernant le patient

		$sql = ' SELECT * FROM patients 
		INNER JOIN consultations
		ON consultations.fk_IdPatient=patients.idPatient
		INNER JOIN services
		ON consultations.fk_Idservice=services.idService
		WHERE patients.IdPatient = \''.$ident.'\' ';
		
		$result = $conn->query($sql);
		
		// Création du tableau, entête des colonnes
				
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

		// On affiche les lignes du tableau une à une à l'aide d'une boucle

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

		// On ferme la connection

		$conn->close();
		
	?>
	
	<a href="EditionDonneesPatient.php"><button>Modifier les données d'un patient</button></a>
	<?php 
	include("footer.html");
	?>
    </body>
</html>