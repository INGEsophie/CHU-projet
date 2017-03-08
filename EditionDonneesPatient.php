<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CHU Evreux - Edition des données patient</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
include("header.html"); 
?>

<?php

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
  
  <div class="container-fluid">
    <h2>Editer ses informations personnelles</h2>
    <form method="get" action="EditionDonneesPatient.php" class="formulaire">
      <fieldset>
        <legend>Pour modifier vos coordonnées vous devez vous identifier puis valider vos modifications</legend> <!-- Titre du fieldset --> 
		
		<select name="NomPatient" id="NomPatient" onchange="javascript:GoAction(\'Nom\',this.value);" required>
<!-- /* A TERMINER - Liste déroulante pour séléctionner le nom de l'utilisateur */ -->
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
		<input type="submit" value="Modifier">
	   </fieldset>
	</form>
  </div>
<?php
$IdPatient = $_GET['NomPatient'] ? $_GET['NomPatient'] : NULL;

$sql = ' SELECT * FROM patients WHERE IdPatient='.$IdPatient.'';
$result = $conn->query($sql); 

		

?>	
	<div>
		<br>
		<form method="post" action="#" class="formulaire">
      
	  
		<?php
		if ($result->num_rows > 0) {
		while($donnees = $result->fetch_assoc()) {
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" name="nom" id="nom" value="'.$donnees['Nom'].'"/><br><br>';

        echo '<label for="prenom">Prénom :</label>';
        echo '<input type="text" name="prenom" id="prenom" value="'.$donnees['Prenom'].'"/><br><br>';
   
        echo '<label for="email">Votre Email :</label>';
        echo '<input type="email" name="email" id="email" value="'.$donnees['Email'].'"/><br><br>';
         
        echo '<label for="email">Votre date de naissance :</label>';
        echo '<input type="date" name="dateNaissance" id="dateNaissance" value="'.$donnees['DateNaissance'].'"/><br><br>';

        echo '<label for="adresse">Votre adresse :</label>';
        echo '<input type="text" name="adresse" id="adresse"  size="30" maxlength="80" value="'.$donnees['AdressPostale'].'"/><br><br>';
         
        echo '<label for="nusocial">Votre numero de sécurité social :</label>';
        echo '<input type="text" name="nusocial" id="nusocial" size="15" minlength="15" maxlength="15" value="'.$donnees['NumSecu'].'"/>';
		echo '<br><br>';
		echo '<input type="submit" value="Modifier">';
		}
		}
		else {
		echo "Séléctionnez un patient ci-dessus";
		}
		?>
		</form>
	</div>
  
<?php




$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$dateNaissance = isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : NULL;
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;
$nusocial = isset($_POST['nusocial']) ? $_POST['nusocial'] : NULL;



$sql = "UPDATE patients
		SET `Nom` = '$nom', `Prenom` = '$prenom', `DateNaissance` = '$dateNaissance', `AdressPostale` = '$adresse', `NumSecu` = '$nusocial', `Email` = '$email'
		WHERE `IdPatient` = '$IdPatient'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
		
$conn->close();  

?>

<?php 
include("footer.html");
?>

</body>
		
</html>
