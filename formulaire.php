<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  
  <title>Centre Hospitalier Universitaire de Rouen</title>
  
  
  </head>

<body>
    <p>Ceci est votre formulaire d'hospitalisation.</p>
<form method="post" action="traitement.php">
 
   <fieldset>
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 

       <label for="Nom">Quel est votre nom ?</label>
       <input type="text" name="nom" id="Nom" /><br><br>

       <label for="Prenom">Quel est votre prénom ?</label>
       <input type="text" name="Prenom" id="Prenom" /><br><br>
 
       <label for="Email">Quel est votre e-mail ?</label>
       <input type="Email" name="Email" id="Email" /><br><br>
       
       <label for="DateNaissance">Quel est votre date de naissance ?</label>
       <input type="date" name="DateNaissance" id="DateNaissance"><br><br>

       <label for="AdressePostale">Votre adresse :</label>
            <input type="text" name="AdressePostale" id="AdressePostale"  size="30" maxlength="80" /><br><br>
       
       <label for="NumSecu">Votre numero de sécurité social :</label>
       <input type="int" name="NumSecu" id="NumSecu" size="15" minlength="15" maxlength="15" />
       
       </fieldset>
       
    <br><br>
        <fieldset>
            <legend>Votre consultation</legend>
            
      <label for="DateConsul">Le jour de consultation</label>
       <input type="date" name="dateConsul" id="dateConsul"><br><br>
        
     <label for="HeureConsul">L'heure de consultation</label>
       <input type="time" name="heureConsul" id="heureConsul"><br><br>
            
            
    <label for="ButConsul">Le but de la consultation :</label>
            <input type="text" name="butconsul" id="ButConsul"  size="30" maxlength="80" /><br><br>
            
       
    <label for="NomService">Le service :</label>
            <input type="text" name="NomService" id="NomService"  size="15" maxlength="30" /><br><br>    
      
        </fieldset>
    
    </form>























</body>
		
		
</html>