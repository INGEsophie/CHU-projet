<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CHU Evreux - Fiche patient</title>

    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  </head>

	<body>

  <?php 
    include("header.html"); 
  ?>

  <div class="container-fluid">
    <h1>Outil recherche</h1>
    <div class="row formulaire">
    	<legend>Patients enregistrés</legend><br>
        <form class="form-search">
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
       
       echo ('<option>'.$donnees['Nom'].''.$donnees['Prenom'].'</option>');
      
      }
       
} 
else {
    echo "0 results";
}
$conn->close();
?>
		  </select>
          <button type="submit" class="btn" id="patients" name="patients">Ok</button>
        </form><br>

      <legend>Recherche consultations </legend><br>
        <form class="form-search">
          <input type="text">
          <button type="submit" class="btn" id="consultations" name="consultations">OK</button>
        </form><br>

      <legend>Recherche par date</legend><br>
      <input type="text" id="date" name="date" placeholder="date" required>
      <button type="submit" class="btn" id="submit">OK</button>
    </div>
  </div>

  <?php 
    include("footer.html");
  ?>

	</body>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.js" />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

</html>
