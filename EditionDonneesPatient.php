<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CHU Evreux - Edition des données patient</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php 
    include("header.html"); 
  ?>

  <div class="container-fluid">
    <h2>Editer vos informations personnelles</h2>
    <form method="post" action="#" class="formulaire">
      <fieldset>
        <legend>Coordonnées</legend> <!-- Titre du fieldset --> 

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
		<br><br>
		<input type="submit" value="Modifier">
      </fieldset>
    </form>
  </div>

  <?php 
    include("footer.html");
  ?>

</body>
		
</html>
