
<!--This is the principal page-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> planet site	</title>
<meta name="planet site" content="This is the first page of the planet site"> 
<link rel="stylesheet" type="text/css" href = "src/styleTemplate.css">
</head>

<body>
    
    <header class="top">
        
        <p>
            <a  href="contact.html" class="white">Contact</a>
            |
            <a href="login_page.php" class="white"> Sign in</a>
            |
            <a href="inscription.php" class="white"> Sign up</a>
        </p>
        <ul>
            <li><a href="login_page.php">PAGE</a></li>
            <li><a href="page.html">TOTO</a></li>
            <li><a href="page.html">TATA</a></li>
            <li><a href="page.html">VAVA</a></li>
            <li><a href="page.html">LOLO</a></li>
        </ul>
    </header>

    <div class="medium">
    <P style="text-align:center; color: white; font-size: 1.5em;">Sign in to Space X</P><br><br>
        

        <form method="post" action="login_page.php"> 
            
            <fieldset>
                 <legend> Veuillez remplir ce formulaire : </legend>
                 <p>Votre annonce : </p>
            <br>

                <label for="Titre" class="inline">Titre Annonce:</label>
                <input type="text" name="titre" id="titre" required/>
               
               
                <label for="nom" class="inline" >Nom Planet:</label> 
                <input type="text" name="nom" id="nom" required/><br><br>
              
                <label for="couleur">Couleur Planet<br></label> 
                <input type= "color" name="couleur" id="couleur"><br><br>
              

                <label for="taille" >Taille Planet<br></label> 
                <input type="text" name="taille" id="taille" required/><br><br>

                <label for="distance planet" >Distance planet<br></label> 
                <input type="text" name="distance planet" id="distance planet"/><br><br>

                <label for="composition planet" >Composition Planet<br></label> 
                <input type="text" name="composition planet" id="composition planet"/><br>
                
                
                <label for="composition">Dans quel matière est votre planète?<br></label><br>
                    <select name="composition" id="composition">
                        <option value="Fer">Fer</option>
                        <option value="Mercure">Mercure</option>
                        <option value="Eau">Eau</option>
                        <option value="Plomb">Plomb</option>
                        <option value="Granit">Granit</option>
                        <option value="Chrome">Chrome</option>
                        <option value="cobalt">Cobalt</option>
                        <option value="Palladium">Palladium</option>
                    </select> 
                    <br>
                
                
                <label for="Habitant" >Habitant:<br></label> 
                <input type="text" name="habitant" id="habitant"/><br><br>

                <label for="proprietaire" >Propriétaire:<br></label> 
                <input type="text" name="proprietaire" id="proprio"/><br><br>

                 
                 Veuillez indiquer si votre planête est viable : 
                <input type="radio"  name="viabilite" id="Viab"/> <label for="Oui" class="inline">oui</label>
                <input type="radio"  name="viabilite" id="Viab"/> <label for="non" class="inline">non</label><br><br>
            <fieldse   
                <label for="prix" > Prix:<br></label> 
                <input type="text" name="prix" id="prix"/><br>

                <label for="photo" > Photo:<br></label> 
                <input type="photo" name="photo" id="photo"/><br>


                <label for="descrip"> Description:<br></label> 
                <Textarea name="descrip" id="descrip"> </Textarea><br>


                <input type="submit" value="Envoyer" />
 
            </fieldset>

            


            



        </form>
       
    </div>

    <div class="bottom">
        <ul>
            <li>
                <h1 class="text">l'actualité </h1>
                <br>
                <br>
               
                  <!--<p class="text">
                  <a class = "button" href="abonner.html"> S'abonner</a></p> -->
               
                
                <form class="text" action="abondant.php" method="post">
                    <label for="user">Adresse mail:</label> 
                   
                    <input type="email" name="abondant" style="height:20px; margin-top:10px;">
                    <br><br>
                    <input class="buttonA" type="submit" value="s'abonner">
                </form>
                
            </li>

            <li>
                <h1 class="text"> Nos engagements</h1>
            </li>
            <li>
                <h1 class="text">service client</h1>
                <br><br>
                <p class="textSmall">Le service client est à l'écoute du lundi au samedi de 8h à 20h</p>
                <br><br>
                <p class="text"><a class="button" href="contact">nous contacter</a></p>
            </li>
        </ul>
    </div>

    <div class="foot">
        <a class="icon" href="https://www.facebook.com/" target = "_blank">
            <img src="src/photo/facebook.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://fr.linkedin.com/" target = "_blank">
                <img src="src/photo/lindink.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://www.instagram.com/?hl=fr" target = "_blank">
                <img src="src/photo/instragram.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://twitter.com/?lang=fr" target = "_blank">
                    <img src="src/photo/twiter.png" width="50px" height="50px">
        </a>

        <a class="icon" href="https://www.youtube.com/?gl=FR&hl=fr" target = "_blank">
                <img src="src/photo/youtube.png" width="50px" height="50px">
        </a>

    </div>
</body>

</html>