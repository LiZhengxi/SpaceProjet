<?php
    include("connexion.php"); 

    // Take the form value
     $email = $_POST['email'];
     $password=$_POST['pass'];
    // Take the SQL sentence
     $requet = $db->prepare ("select adresse_mail, password FROM compte");
    // Execute the SQL
     $requet->execute(); 
     $compte = $requet->fetchAll(PDO::FETCH_ASSOC);
    // Define a value to verify whether the compte existe ou not
     $nonExiste=0;
     for ($i=0;$i<=count($compte)-1;$i++)
     {
         if ($email == $compte[$i]['adresse_mail'])
         {  $nonExiste =1;
             if($password == $compte[$i]['password'])
             {
                 echo "Sucessfully!!";
             }
             else
             {
                 echo "password not right"; 
             }
         }
     }
     if ($nonExiste==0)
     {
         echo "not find this account";
     }
 
?>