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
    <h1>Outil recherche</h1>
    <div class="row formulaire">
    	<legend>Patients enregistrés</legend><br>
        <form method="post" action="RecherchePatient.php" class="form-search">
          <select name="ident" id="ident" onchange="javascript:GoAction(\'Nom\',this.value);" required>
          <!-- /* A TERMINER - Liste déroulante pour séléctionner le nom de l'utilisateur */ -->
          <?php   
              $sql = ' SELECT * FROM patients';
              $result = $conn->query($sql); 
              if ($result->num_rows > 0) {    
                echo (' <option value="Nom" selected="">Patient</option>
                    <option value="" disabled=""></option>');
                while($donnees = $result->fetch_assoc()) {      
                echo ('<option value="'.$donnees['IdPatient'].'">'.$donnees['Prenom'].' '.$donnees['Nom'].' N°Sécu: '.$donnees['NumSecu'].'</option>');
                }
              } 
              
              else {
              echo ('<option value="Nom" selected="">Il n\'y a aucun patient dans la base de données</option>');
              }
          ?>
          </select>
          <button type="submit" class="btn">Ok</button>
        </form><br>

      <legend>Recherche consultations </legend><br>
        <form method="get" action="#" class="form-search">
          <select name="consult" id="consult" onchange="javascript:GoAction(\'Nom\',this.value);" required>
          <!-- /* A TERMINER - Liste déroulante pour séléctionner le nom de l'utilisateur */ -->
          <?php   
              $sql = ' SELECT * FROM consultations 
              INNER JOIN services ON consultations.fk_IdService=services.IdService
              INNER JOIN patients ON consultations.fk_IdPatient=patients.IdPatient';
              $result = $conn->query($sql); 
              if ($result->num_rows > 0) {    
                echo (' <option value="Nom" selected="">Consultations</option>
                    <option value="" disabled=""></option>');
                while($donnees = $result->fetch_assoc()) {      
                echo ('<option value="'.$donnees['IdConsul'].'">'.$donnees['NomService'].' - '.$donnees['ButConsul'].' - '.$donnees['Nom'].' '.$donnees['Prenom'].'</option>');
                }
              } 
              
              else {
              echo ('<option value="Nom" selected="">Il n\'y a aucune consultation enregistrée</option>');
              }
          ?>
          </select>
          <button type="submit" class="btn" id="consultations" name="consultations">OK</button>
        </form><br>

      <legend>Recherche de date à date</legend><br>
      <form action="AffichageConsultationsDateADate.php" method="post">
			<input type="date" name="dateun" id="dateun">
			<input type="date" name="datedeux" id="datedeux">
			<button type="submit" class="btn">Ok</button>
		</form>
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
