<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Centre Hospitalier Universitaire de Rouen</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

  <?php 
    include("header.html"); 
  ?>


  <h2>Formulaire d'hospitalisation.</h2>
  <form method="post" action="traitement.php">
    <fieldset>
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 

       <label for="nom">Quel est votre nom ?</label>
       <input type="text" name="nom" id="nom" /><br><br>

       <label for="prenom">Quel est votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" /><br><br>
 
       <label for="email">Quel est votre e-mail ?</label>
       <input type="email" name="email" id="email" /><br><br>
       
       <label for="email">Quel est votre date de naissance ?</label>
       <input type="date" name="dateNaissance" id="dateNaissance"><br><br>

       <label for="adresse">Votre adresse :</label>
            <input type="text" name="adresse" id="adresse"  size="30" maxlength="80" /><br><br>
       
       <label for="nusocial">Votre numero de sécurité social :</label>
       <input type="text" name="nusocial" id="nusocial" size="15" minlength="15" maxlength="15" />
       
       
       
    </fieldset>
    
  </form>

  <?php 
    include("footer.html");
  ?>

</body>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
		
</html>
