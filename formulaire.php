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
    //include("header.html"); 
  ?>


  <h2>Formulaire d'hospitalisation.</h2>
  <form method="post" action="traitement.php">
    <fieldset>
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 

       <label for="Nom">le nom ?</label>
       <input type="text" name="nom" id="Nom" /><br><br>

       <label for="Prenom">le prénom ?</label>
       <input type="text" name="prenom" id="Prenom" /><br><br>
 
       <label for="Email"l e-mail ?></label>
       <input type="email" name="email" id="Email" /><br><br>
       
       <label for="DateNaissance">La date de naissance ?</label>
       <input type="date" name="datenaissance" id="DateNaissance"><br><br>

       <label for="AdressePostale">Votre adresse :</label>
            <input type="text" name="adresse" id="AdressePostale"  size="30" maxlength="80" /><br><br>
       
       <label for="NumSecu">Le numero de sécurité social :</label>
       <input type="text" name="numsecu" id="NumSecu" size="15" minlength="15" maxlength="15" />
       
       
       
    </fieldset>

    
       
    


    <input type="submit" name="envoyer" value="Envoyer" />
       

    </form>

  <?php 
    include("footer.html");
  ?>

</body>
		
</html>
