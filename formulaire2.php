<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CHU Evreux - Enregistrement patient</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  
<legend>Patients enregistrés</legend><br>
        <form class="form-search">
<!-- Dans select ajouter name="Iddupatient" -->
          <select>
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
echo "Connected successfully"; 
$sql = 'SELECT * FROM patients ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
 while($donnees = $result->fetch_assoc()) {
      
	 
       echo ('<option value="'.$donnees['IdPatient'].'">'.$donnees['Nom'].'&nbsp;'.$donnees['Prenom'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}

// Supprimer la fermeture, voir (*1)
$conn->close();
?>
			  
			  
			  
			  
		  </select>
<!-- Bouton à supprimer il est inutile de valider le champ select -->
          <button type="submit" class="btn" id="patients" name="patients">Ok</button>
        </form><br>
	
	
	
	
	
	<legend>Service</legend><br>
        <form class="form-search">
<!-- Dans select ajouter name="IDduservice" -->
          <select>
		    <?php /* (1) Peut être supprimer la connexion à la base de données ci dessous (certainement inutile) */
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
$sql = 'SELECT * FROM services ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
 while($donnees = $result->fetch_assoc()) {
       
	   // Ajouter dans option valeur="'.$donnees['IdService'].'"   (vériier la nom dans la base de données)
       echo ('<option>'.$donnees['NomService'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}

// A supprimer voir (*1)
$conn->close();
?>
		  </select>
<!-- Bouton à supprimer il est inutile de valider le champ select -->
          <button type="submit" class="btn" id="services" name="services">Ok</button>
        </form><br>
	
<label for="DateConsul">La date de consultation</label>
<!-- Changer  datenaissance par DateConsul -->
       <input type="date" name="datenaissance" id="DateNaissance"><br><br>
	
<label for="HeureConsul">L'heure de la consultation</label>
<!-- Changer  heureconsul par HeureConsul -->
       <input type="time" name="heureconsul" id="HeureConsul"><br><br>
	
<label for="ButConsul">Motif de consultation:</label>
<!-- Changer  butconsul par ButConsul -->
	<textarea name="butconsul" id="ButConsul" rows="5" cols="15" ></textarea><br><br>
	
	
	
<?php	
$dateconsul = isset($_POST['DateConsul']) ? $_POST['DateConsul'] : NULL;	
$heureconsul = isset($_POST['HeureConsul']) ? $_POST['HeureConsul'] : NULL;	
$butconsul = isset($_POST['ButConsul']) ? $_POST['ButConsul'] : NULL;	
	?>
	
	
	
	
	
        <form class="form-search">
		    <?php // Supprimer connexion voir (*1)
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

$fk_IdPatient = $_POST['Iddupatient'] ? $_POST['Iddupatient'] : NULL;
$fk_IdService = $_POST['IDduservice'] ? $_POST['IDduservice'] : NULL;
// Dans la requête SQL remplacer consultation par consultations (voir nom de la table dans la base de données)
$sql = 'INSERT INTO consultation 
VALUES("", "'.$fk_IdPatient.'", "'.$fk_IdService.'", "'.$dateconsul.'" , "'.$heureconsul.'", "'.$butconsul.'")';
if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

			  
			  
$conn->close();
?>
			  
			  

        
	  
	  
    <input type="submit" value="Envoyer" />
       
  <?php 
    include("footer.html");
  ?>

</body>
		
</html>
