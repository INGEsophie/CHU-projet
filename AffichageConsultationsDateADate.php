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
		
		<form action="AffichageConsultationsDateADate.php" method="post">
			<input type="date" name="dateun" id="dateun"  placeholder="AAAA-MM-JJ" onFocus="javascript:this.placeholder=''">
			<input type="date" name="datedeux" id="datedeux"  placeholder="AAAA-MM-JJ" onFocus="javascript:this.placeholder=''">
			<button type="submit" class="btn">Ok</button>
		</form>
		
		
		
        <?php //Connection avec la BDD.

		//<!-- On va afficher les consultations de date à date dans un tableau dans cet exemple --> 
		
		$dateun = isset($_POST['dateun']) ? $_POST['dateun'] : NULL;
		$datedeux = isset($_POST['datedeux']) ? $_POST['datedeux'] : NULL;
		
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
		
		$sql = ' SELECT * FROM consultations 
		INNER JOIN services
		ON consultations.fk_IdService=services.IdService
		INNER JOIN patients
		ON consultations.fk_IdPatient=patients.IdPatient
		WHERE consultations.DateConsul 
		BETWEEN \' '.$dateun.' \' AND \' '.$datedeux.' \' ';
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
		
	<?php 
	include("footer.html");
	?>
    </body>
</html>