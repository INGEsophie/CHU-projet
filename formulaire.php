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
       <input type="text" name="Nom" id="Nom" /><br><br>

       <label for="Prenom">Quel est votre prénom ?</label>
       <input type="text" name="Prenom" id="Prenom" /><br><br>
 
       <label for="Email">Quel est votre e-mail ?</label>
       <input type="email" name="Email" id="Email" /><br><br>
       
       <label for="DateNaissance">Quel est votre date de naissance ?</label>
       <input type="date" name="DateNaissance" id="DateNaissance"><br><br>

       <label for="AdressePostale">Votre adresse :</label>
            <input type="text" name="adresse" id="AdressePostale"  size="30" maxlength="80" /><br><br>
       
       <label for="NumSecu">Votre numero de sécurité social :</label>
       <input type="text" name="NumSecu" id="NumSecu" size="15" minlength="15" maxlength="15" />
       
       
       
   </fieldset>
    
    <br>
    
        <fieldset>
            <legend>Votre consultation</legend>
            
      <label for="DateConsul">Le jour de consultation</label>
       <input type="date" name="dateConsul" id="DateConsul"><br><br>
        
     <label for="HeureConsul">L'heure de consultation</label>
       <input type="time" name="HeureConsul" id="HeureConsul"><br><br>
            
     <label for="NomService">Le service :</label>
            <input type="text" name="NomService" id="NomService"  size="15" maxlength="30" /><br><br>            
            
    <label for="ButConsul">Le but de la consultation :</label>
            <textarea name="ButConsul" id="ButConsul" rows="4" cols="50"  ></textarea><br><br>
            
       
   
      
        </fieldset>
    
    <input type="submit" name="envoyer" value="Envoyer" />
       
    </form>























</body>
		
		
</html>
