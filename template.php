
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
    <P style="text-align:center; color: white; font-size: 1.5em;">Sign in to Space X</P>
        <h2> Veuillez remplir ce formulaire </h2>

        <form method="post" action="login_page.php"> 
            <p>
                <label for="Titre" >Titre Annonce</label> : <input type="text" name="titre" id="titre"/><br/>

                <label for="nom" >Nom Planet</label> : <input type="text" name="nom" id="nom"/><br/>
                
                <label for="couleur">Couleur Planet</label> : <input type= "text" name="couleur" id="couleur"/><br/>

                <label for="taille" >Taille Planet</label> : <input type="text" name="taille" id="taille"/><br/>

                <label for="distance planet" >Distance planet</label> : <input type="text" name="distance planet" id="distance planet"/><br/>

                <label for="composition planet" >Composition Planet</label> : <input type="text" name="composition planet" id="composition planet"/><br/>

                <label for="Habitant" >Habitant</label> : <input type="text" name="habitant" id="habitant"/><br/>

                <label for="proprietaire" >Propriétaire</label> : <input type="text" name="proprietaire" id="proprio"/><br/>

                <label for="viabilite" > Viabilité</label> : <input type="text" name="viabilite" id="Viab"/><br/>

                <label for="prix" > Prix</label> : <input type="text" name="prix" id="prix"/><br/>

                <label for="descrip"> description</label> : <Textarea name="descrip" id="descrip"/> <Textarea/><br/>
 





            </p>



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