
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Résultat du formulaire</title>
  </head>
  
  <body>

  <header></header>
  <h1>Récapitulatif de votre inscription</h1>
  
  <input type="button" width="100px" height="40px" name="valider" value=" Accès Administrateur" onclick="window.location.href='formulaire.php';">
  <hr>
  <?php
  
  // On vérifie si la variable existe et sinon elle vaut NULL
$Nom = isset($_POST['Nom']) ? $_POST['Nom'] : NULL;
$Prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : NULL;
$Email = isset($_POST['Email']) ? $_POST['Email'] : NULL;
$DateNaissance = isset($_POST['DateNaissance']) ? $_POST['DateNaissance'] : NULL;
$AdressePostale = isset($_POST['AdressePostale']) ? $_POST['AdressePostale'] : NULL;
$NumSecu = isset($_POST['NumSecu']) ? $_POST['NumSecu'] : NULL;
$DateConsul = isset($_POST['DateConsul']) ? $_POST['DateConsul'] : NULL;
$HeureConsul = isset($_POST['HeureConsul']) ? $_POST['HeureConsul'] : NULL;
$ButConsul($_POST['ButConsul']) ? $_POST['ButConsul'] : NULL;
$NomService = isset($_POST['NonService']) ? $_POST['NomService'] : NULL;

  
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
echo "Connected successfully"; 
$sql = 'INSERT INTO patients (IdPatient, Nom, Prenom,DateNaissance, AdressePostale, Email, DateConsul, HeureConsul, NomService) 
VALUES("", "'.$Nom.'", "'.$Prenom.'", "'.$DateNaissance.'", "'.$Email.'", "'.$AdressePostale.'", "'.$NumSecu.'", "'.$DateConsul.'", "'.$HeureConsul.'", "'.$ButCOnsul.'", "'.$NomService.'")';
if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  
  
  echo("<center>Le nom est: $Nom</center><br><br>");
  echo("<center>Le prénom est: $Prenom</center><br><br>");
  echo("<center>La date est: $Email</center><br><br>"); 
  echo("<center>Le lieu de naissance est: $DateNaissance</center><br><br>");
  echo("<center>L'adresse postale est: $AdressePostale</center><br><br>");   
  echo("<center>Le code postal est: $NumSecu</center><br><br>"); 
  echo("<center>L'email est: $DateConsul</center><br><br>"); 
  echo("<center>Le site est: $HeureConsul</center><br><br>"); 
  echo("<center>Le numéro de téléphone est: $ButConsul</center><br><br>"); 
  echo("<center>Le semestre est: $NomService</center><br><br>"); 
  
  
  echo("<center>Les connaissances sont:</center><br>");
  foreach((array)$connaissances as $valeur){
  echo("<center>$valeur</center><br>");
  }
  ?>
  <hr>
  
  </body>
  
</html>