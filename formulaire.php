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
    include("header.html"); 
  ?>

<<<<<<< HEAD

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
    
<<<<<<< HEAD
  </form>
=======
    <br>
    
        <fieldset>
            <legend>Votre consultation</legend>
            
      <label for="DateConsul">Le jour de consultation</label>
       <input type="date" name="dateConsul" id="dateConsul"><br><br>
=======
  <div class="container-fluid">
    <h2>Formulaire d'hospitalisation</h2>
    <form method="post" action="traitement.php" class="formulaire">
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
      </fieldset>
      <hr>
      <fieldset>
        <legend>Votre consultation</legend>
              
        <label for="DateConsul">Le jour de consultation</label>
        <input type="date" name="dateConsul" id="dateConsul"><br><br>
>>>>>>> refs/remotes/origin/master
        
        <label for="HeureConsul">L'heure de consultation</label>
        <input type="time" name="heureConsul" id="heureConsul"><br><br>
              
        <label for="ButConsul">Le but de la consultation :</label>
        <input type="text" name="butconsul" id="ButConsul"  size="30" maxlength="80" /><br><br>
              
        <label for="NomService">Le service :</label>
        <input type="text" name="NomService" id="NomService"  size="15" maxlength="30" /><br><br>    
      </fieldset>
      <input type="submit" name="envoyer" value="Envoyer" class="btn bnt-defaut" />
    </form>
<<<<<<< HEAD





















>>>>>>> refs/remotes/origin/frejodo
=======
  </div>
>>>>>>> refs/remotes/origin/master

  <?php 
    include("footer.html");
  ?>

</body>
		
</html>
