<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>CHU Evreux - Enregistrement patient</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  

<form class="form-search" method="post" action="traitement2.php">


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
?>
<legend>Patients enregistrés	
<select name="IdPatient">
		    <?php
$sql1 = 'SELECT * FROM patients ';
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
	
	echo ('<option value="Nom" selected=""> Selectionnez un patient</option>');
   
 while($donnees1 = $result1->fetch_assoc()) {
      
	 
       echo ('<option value="'.$donnees1['IdPatient'].'">'.$donnees1['Nom'].'&nbsp;'.$donnees1['Prenom'].'</option>');
      }
	  
	  
       
} 
else {
    echo "0 results";
}
//$conn->close();
?>  
			  
</select>
</legend><br>
<!-- Bouton à supprimer il est inutile de valider le champ select -->
          
        <br>
	
	
<legend>Services
        
<select name="IdService">
		    <?php 
			  

$sql2 = 'SELECT * FROM services ';
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
   
 while($donnees2 = $result2->fetch_assoc()) {
       
	  
       echo ('<option value="'.$donnees2['IdService'].'">'.$donnees2['NomService'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}
$conn->close();

?>
</select>
</legend><br>

	
<label for="DateConsul">La date de consultation</label>
<!-- Changer  datenaissance par DateConsul -->
       <input type="date" name="dateconsul" id="DateConsul"><br><br>
	
<label for="HeureConsul">L'heure de la consultation</label>
<!-- Changer  heureconsul par HeureConsul -->
       <input type="time" name="heureconsul" id="HeureConsul"><br><br>
	
<label for="ButConsul">Motif de consultation:</label>
<!-- Changer  butconsul par ButConsul -->
	<textarea name="butconsul" id="ButConsul" rows="5" cols="15" ></textarea><br><br>
	  
    <input type="submit" value="Envoyer" />
</form>   
  <?php 
  include("footer.html");
  ?>

</body>
		
</html>
