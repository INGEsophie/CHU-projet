
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
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$datenaissance = isset($_POST['datenaissance']) ? $_POST['datenaissance'] : NULL;

$adressepostale = isset($_POST['adresspostale']) ? $_POST['adresspostale'] : NULL;



$numsecu = isset($_POST['numsecu']) ? $_POST['numsecu'] : NULL;

  
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

//echo "Connected successfully"; 
$sql = 'INSERT INTO patients 
VALUES("", "'.$nom.'", "'.$prenom.'", "'.$datenaissance.'",  "'.$adressepostale.'", "'.$numsecu.'", "'.$email.'")';

//echo "Connected successfully"; 

$sql = 'INSERT INTO patients VALUES("", "'.$nom.'", "'.$prenom.'", "'.$datenaissance.'" , "'.$adressepostale.'", "'.$numsecu.'", "'.$email.'")';

$sql = 'INSERT INTO patients 
VALUES("", "'.$nom.'", "'.$prenom.'", "'.$datenaissance.'" , "'.$adressepostale.'", "'.$numsecu.'", "'.$email.'")';

if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  

  echo("<center>Le nom est: $nom</center><br><br>");
  echo("<center>Le prénom est: $prenom</center><br><br>");
  echo("<center>L'e' est: $email</center><br><br>"); 
  echo("<center>Le date de naissance est: $datenaissance</center><br><br>");
  echo("<center>L'adresse postale est: $adressepostale</center><br><br>");   


  echo("<center>Le numéro de secu est: $numsecu</center><br><br>"); 
  echo("<center>Le nom est: $nom</center><br><br>");
  
  

  echo("<center>Le numéro de la sécu est: $numsecu</center><br><br>"); 

  echo("<center>Le num sécu: $numsecu</center><br><br>"); 

 

 
  ?>
  <hr>
  
  </body>
  
</html>
