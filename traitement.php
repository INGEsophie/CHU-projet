<?php

$base = mysql_connect ('localhost', 'root', '');
mysql_select_db ('bdchu', $base) ;








$Nom = isset($_POST['Nom']) ? $_POST['Nom'] : NULL;

$Prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : NULL;

$Email = isset($_POST['Email']) ? $_POST['Email'] : NULL;

$DateNaissance = isset($_POST['DateNaissance']) ? $_POST['DateNaissance'] : NULL;

$AdressePostale = isset($_POST['AdressePostale']) ? $_POST['AdressePostale'] : NULL;

$NumSecu = isset($_POST['NumSecu']) ? $_POST['NumSecu'] : NULL;

$DateConsul = isset($_POST['DateConsul']) ? $_POST['DateConsul'] : NULL;

$HeureConsul = isset($_POST['HeureConsul']) ? $_POST['HeureConsul'] : NULL;

$ButConsul = isset($_POST['ButConsul']) ? $_POST['ButConsul'] : NULL;

$NomService = isset($_POST['NomService']) ? $_POST['NomService'] : NULL;



   



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
VALUES("", "'.$Nom.'", "'.$Prenom.'", "'.$Date!naissance.'", "'.$AdressePostale.'", "'.$NumSecu.'", "'.$DateConsul.'", "'.$HeureConsul.'", "'.$ButConsul.'", "'.$NonService.'")';
if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>