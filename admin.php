<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>

<style>
body{



 background-image: url(hematologie.jpg);
 background-size: cover;
 background-attachment: fixed;


.content{
background: white;


}



    }



    

</style>

    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">

            

                  
<!--Fonctionnalité Authentification !-->



               <form action="proc3.php" method="POST">
                <img src="images/sath.png"><br><br>
                <input class="form-control"  type="text"  id="nom_utilisateur"  name="nom_utilisateur" placeholder="Nom d'Utilisateur"><br>
                <input class="form-control" type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de Passe"><br>
         
                 <tr>
                	<!--Activité Mot de Passe Oublié -->
                 <a href="forget_pass.php">	<td align="right"><u> Mot De Passe Oublié ?</u> </td></a>
                </tr>
                
                 <br>
                 


                 <button class="btn btn-success mt-3" type="submit" name="Login">Connexion</button>
                
               <br>
              


               </form> 

              <?php 




                $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullUrl, "Connexion=empty") == true){
                          echo "<p style='color:blue'> Saisissez un nom d'utilisateur et un Mot de passe </p>";
                          exit();

                }
                if(strpos($fullUrl, "Connexion=usernameempty") == true){
                          echo "<p style='color:blue'> Saisissez un nom d'utilisateur </p>";
                          exit();

                }
                if(strpos($fullUrl, "Connexion=passwordempty") == true){
                          echo "<p style='color:blue'> Saisissez un Mot de passe </p>";
                          exit();

                }
                if(strpos($fullUrl, "Connexion=upf") == true){
                  echo "<h5 style='color:black'   > <strong> Nom d'utilisateur ou mot de passe incorrect ! <strong></h5>";
                  exit();

                }














                  ?>
            </div>
        </div>
    </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
</body>
</html>
