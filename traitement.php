
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Résultat du formulaire</title>
  </head>
  
  <body>

  <header></header>
  <h1>Récapitulatif de votre inscription</h1>
  
  <hr>
  <?php
  
  // On vérifie si la variable existe et sinon elle vaut NULL
$nom = isset($_POST['Nom']) ? $_POST['Nom'] : NULL;
$prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : NULL;
$email = isset($_POST['Email']) ? $_POST['Email'] : NULL;
$datenaissance = isset($_POST['DateNaissance']) ? $_POST['DateNaissance'] : NULL;
$adressepostale = isset($_POST['AdressPostale']) ? $_POST['AdressPostale'] : NULL;
$numsecu = isset($_POST['NumSecu']) ? $_POST['NumSecu'] : NULL;

  
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "bdchu";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
$sql = 'INSERT INTO patients (Nom, Prenom,DateNaissance, AdressPostale, NumSecu, Email) 
VALUES("'.$nom.'", "'.$prenom.'", "'.$datenaissance.'" , "'.$adressepostale.'", "'.$numsecu.'", "'.$email.'")';
if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  

  echo("<center>Le nom est: $nom</center><br><br>");
  echo("<center>Le prénom est: $prenom</center><br><br>");
  echo("<center>La date est: $email</center><br><br>"); 
  echo("<center>Le lieu de naissance est: $datenaissance</center><br><br>");
  echo("<center>L'adresse postale est: $adressepostale</center><br><br>");   
  echo("<center>Le code postal est: $numsecu</center><br><br>"); 
 
 
  ?>
  <hr>
  
  </body>
  
</html>