<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CHU Evreux - Enregistrement patient</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
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

// On vérifie si la variable existe et sinon elle vaut NULL
$id_patient = $_POST['IdPatient'] ? $_POST['IdPatient'] : NULL;
$id_service = $_POST['IdService'] ? $_POST['IdService'] : NULL;
$d_consul = $_POST['dateconsul'] ? $_POST['dateconsul'] : NULL;
$h_consul = $_POST['heureconsul'] ? $_POST['heureconsul'] : NULL;
$b_consul = $_POST['butconsul'] ? $_POST['butconsul'] : NULL;


     $sql = 'INSERT INTO consultations (IdConsul, fk_IdPatient, fk_IdService, DateConsul, HeureConsul, ButConsul) 
VALUES("", "'.$id_patient.'", "'.$id_service.'",  "'.$d_consul.'" , "'.$h_consul.'", "'.$b_consul.'")';
    if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
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
