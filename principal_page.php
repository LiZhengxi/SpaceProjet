<?php
function getAnnoceInformation($variable,$item) {
    include("connexion.php");
    $requet = $db->prepare ("select * FROM annonce");
  
    // Execute the SQL
     $requet->execute(); 
     $compte = $requet->fetchAll(PDO::FETCH_ASSOC);
     if (count($compte)<$item)
        {
            return "nothing";
        } 
    else
    { 
     return $compte[$item][$variable]; 
    }   
}

function showProduct(){
    include("connexion.php");
    $requet = $db->prepare ("select title FROM annonce");
    // Execute the SQL
     $requet->execute(); 
     $compte = $requet->fetchAll(PDO::FETCH_ASSOC);
    
    
     if (count($compte)>0) {
        for ($i=0;$i<=count($compte)-1;$i++){
            echo('
            <div class="proBig">
            <div class="pro">
                <div class="proImg"><a href="https://fr.linkedin.com/>"><img src="src/photo/mars.jpg"></a></div>
              <div class="proText">
                <h5>');
                echo(getAnnoceInformation('title',$i));
                echo('</h5>
                <p class="proSize">Dimension:');
                echo(getAnnoceInformation('planetTaille',$i));
                echo('</p>
                <p class="proPrice">EURO €<span>');
                echo(getAnnoceInformation('prix',$i));
                echo('</span></p>
                <a href="https://fr.linkedin.com/"> Buy it now</a>
              </div>
              <div class="proFrom">Galaxie: Solar System </div>
            </div>
        </div>');
        }
     }

     else
     {
         echo("Désolé, nous n'avons pas de planète disponible pour le moment. Véillez nous consulter ultérieument");
     }
}
?>

<!--This is the principal page-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">	
<title> planet site	</title>
<meta name="planet site" content="This is the first page of the planet site"> 
<link rel="stylesheet" type="text/css" href = "src/style.css">
</head>

<body>
    
    <header class="top">
        
        <p class="contact">
            <a  href="contact.html" class="white">Contact</a>
            |
            <a href="SignIn.html" class="white"> Sign in</a>
            |
            <a href="SignUp.html" class="white"> Sign up</a>
        </p>
        <ul>
            <li><a href="index.html">Page</a></li>
            <li><a href="buy.html">Achètez vos planètes</a></li>
            <li><a href="selled.html">Planète vendue</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="contact.html">Qui somme nous?</a></li>
        </ul>
    </header>

<div class="medium">
    <br>
    <h1>What are you waiting for?</h1>
    
    <div class="description">
        <p class="textNormal">A galaxy is a gravitationally bound 
            system of stars, stellar remnants, 
            interstellar gas, dust, and dark matter.
            [1][2] The word galaxy is derived from 
            the Greek galaxias (γαλαξίας), literally 
            "milky", a reference to the Milky Way. 
            Galaxies range in size from dwarfs with 
            just a few hundred million (108) stars to 
            giants with one hundred trillion (1014) 
            stars,[3] each orbiting its galaxys 
            center of mass. </p>
    </div>
  
        <video  width="480" height="320" controls >
            <source src="src/test.mp4" type="video/mp4" >          
            </video>
    <br>
    <div class="presentation">
        <p class="title">Presentation</p>
    </div>
    <div class="product">
        <p class="title">Nos selections</p>
        <br>
        <div class="proRow">
        <?php showProduct();?>
    </div>
    </div>

    <div class="selled">
        <p class="title">Planète vendue</p>
        <br>
        <div class="proRow">
            <div class="proBig">
                <div class="proSelled">
                    <div class="proImg"><img src="src/photo/mars.jpg"></div>
                  <div class="proText">
                    <h5>Mars</h5>
                    <br>
                    <p class="proPrice">Propriété:<span> Hélene Hao</span></p>
                    <br>
                    <p class="proFrom">Galaxie: Solar System </p>
                </div>
                  
                </div>
            </div>
            <div class="proBig">
                <div class="proSelled">
                    <div class="proImg"><img src="src/photo/mars.jpg"></div>
                  <div class="proText">
                    <h5><?php echo("mars");?></h5>
                    <br>
                    <p class="proPrice">Propriété:<span> Hélene Hao</span></p>
                    <br>
                    <p class="proFrom">Galaxie: Solar System </p>
                </div>
                  
                </div>
            </div>
            <div class="proBig">
                <div class="proSelled">
                    <div class="proImg"><img src="src/photo/mars.jpg"></div>
                  <div class="proText">
                    <h5>Mars</h5>
                    <br>
                    <p class="proPrice">Propriété:<span> Hélene Hao</span></p>
                    <br>
                    <p class="proFrom">Galaxie: Solar System </p>
                </div>
                  
                </div>
            </div>
            <div class="proBig">
                <div class="proSelled">
                    <div class="proImg"><img src="src/photo/mars.jpg"></div>
                  <div class="proText">
                    <h5>Mars</h5>
                    <br>
                    <p class="proPrice">Propriété:<span> Hélene Hao</span></p>
                    <br>
                    <p class="proFrom">Galaxie: Solar System </p>
                </div>
                  
                </div>
            </div>
  
    </div>
    </div>
    <div class="information">
        <p class="textNormal">information</p>
    </div>
</div>

    <div class="bottom">
        <ul class="bottomList">
            <li class="bottomItem">
                <p class="text">l'actualité </p>
                <br>
                <br>
               
                <p class="text"><a class = "button" href="abonner.html"> S'abonner</a></p>
               
                <!--
                <form class="text">
                    <label for="user">Adresse mail:</label> 
                    <br>
                    <input type="email" style="height:20px;">
                    <br><br>
                    <input type="submit" value="s'abonner">
                </form>
                -->
            </li>

            <li class="bottomItem">
                <p class="text"> Nos engagements</p>
                <br>
                <p class="textSmall">Spéciale registrer x planet
                    <br>(Space X) pense que toute personne sur 
                    Terre doit pouvoir profiter de sa 
                    propre étoile dans le ciel nocturne.
                     C’est pourquoi nous vous donnons 
                     la possibilité de nommer une étoile
                      dans l’Online Star Register !
                   </p>
            </li>
            <li class="bottomItem">
                <p class="text">service client</p>
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