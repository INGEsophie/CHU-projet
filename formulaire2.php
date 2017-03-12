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
        <form class="form-search" method="post" action=traitement2.php>

          <select name="idpatient">
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
	
	echo ('<option value="Nom" selected=""> Selection patient</option>');
   
 while($donnees = $result->fetch_assoc()) {
      
	 
       echo ('<option value="'.$donnees['IdPatient'].'">'.$donnees['Nom'].'&nbsp;'.$donnees['Prenom'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}

?>  
			  
		  </select>
<!-- Bouton à supprimer il est inutile de valider le champ select -->
          
        <br>
	
	
	<legend>Service</legend><br>
        

          <select name="IDduservice">
		    <?php 
			  

$sql = 'SELECT * FROM services ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
 while($donnees = $result->fetch_assoc()) {
       
	  
       echo ('<option valeur="'.$donnees['IdService'].'">'.$donnees['NomService'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}


?>
		  </select>

        <br>
	
<label for="DateConsul">La date de consultation</label>
<!-- Changer  datenaissance par DateConsul -->
       <input type="date" name="dateconsul" id="DateConsul"><br><br>
	
<label for="HeureConsul">L'heure de la consultation</label>
<!-- Changer  heureconsul par HeureConsul -->
       <input type="time" name="heureconsul" id="HeureConsul"><br><br>
	
<label for="ButConsul">Motif de consultation:</label>
<!-- Changer  butconsul par ButConsul -->
	<textarea name="butconsul" id="ButConsul" rows="5" cols="15" ></textarea><br><br>
	
	
	
<?php	
$dateconsul = isset($_POST['dateconsul']) ? $_POST['dateconsul'] : NULL;	
$heureconsul = isset($_POST['heureconsul']) ? $_POST['heureconsul'] : NULL;	
$butconsul = isset($_POST['butconsul']) ? $_POST['butconsul'] : NULL;
//$idpa = isset($_POST['idpatient']) ? $_POST['idpatient'] : NULL;
//$idservice = isset($_POST['IDduservice']) ? $_POST['IDduservice'] : NULL;
	?>
	
	
	
	
	
        
		    <?php 


$fk_IdPatient = $_POST['IdPatient'] ? $_POST['IdPatient'] : NULL;
$fk_IdService = $_POST['IdService'] ? $_POST['IdService'] : NULL;
			
// Dans la requête SQL remplacer consultation par consultations (voir nom de la table dans la base de données)
$sql = 'INSERT INTO consultations 
VALUES("", "'.$fk_IdPatient.'", "'.$fk_IdService.'", "'.$dateconsul.'" , "'.$heureconsul.'", "'.$butconsul.'")';
if ($conn->query($sql) === TRUE) {
    echo "les données ont bien étés insérées dans la base de données";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

			  
			  
$conn->close();
?>
			  
			  

        
	  
	  
    <input type="submit" value="Envoyer" />
	</form>   
  <?php 
    include("footer.html");
  ?>

</body>
		
</html>
