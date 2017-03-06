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
    <form method="post" action="#" class="formulaire">
      <fieldset>
        <legend>Pour modifier vos coordonnées vous devez vous identifier puis valider vos modifications</legend> <!-- Titre du fieldset --> 
		
		<select name="NomPatient" id="NomPatient">
<!-- /* A TERMINER - Liste déroulante pour séléctionner le nom de l'utilisateur */ -->		
		<option value=""></option>
		</select>

<?php
$IdPatient = $_POST['']


$sql = ' SELECT * FROM patients WHERE IdPatient='.$IdPatient.'';
$result = $conn->query($sql); 

?>	

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php SELECT name FROM patients WHERE IdPatient=  ?>"/><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" /><br><br>
   
        <label for="email">Votre Email :</label>
        <input type="email" name="email" id="email" /><br><br>
         
        <label for="email">Votre date de naissance :</label>
        <input type="date" name="dateNaissance" id="dateNaissance"><br><br>

        <label for="adresse">Votre adresse :</label>
        <input type="text" name="adresse" id="adresse"  size="30" maxlength="80" /><br><br>
         
        <label for="nusocial">Votre numero de sécurité social :</label>
        <input type="text" name="nusocial" id="nusocial" size="15" minlength="15" maxlength="15" />
		<br><br>
		<input type="submit" value="Modifier">
      </fieldset>
    </form>
  </div>
  
<?php




$dateun = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$dateun = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$dateun = isset($_POST['email']) ? $_POST['email'] : NULL;
$dateun = isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : NULL;
$dateun = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;
$dateun = isset($_POST['nusocial']) ? $_POST['nusocial'] : NULL;



$sql = 'UPDATE patients SET Nom = \'New_Nom\'
UPDATE patients SET Prenom = \'New_Prenom\'
UPDATE patients SET DateNaissance = \'New_DateNaissance\'
UPDATE patients SET AdressPostale = \'New_AdressPostale\'
UPDATE patients SET NumSecu = \'New_NumSecu\'
UPDATE patients SET Email = \'New_Email\''

if ($conn->query($sql) === TRUE) {
    echo "Vos informations ont bien été modifiées";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  

?>

<?php 
include("footer.html");
?>

</body>
		
</html>
