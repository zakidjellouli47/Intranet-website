<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Area Charts | Kiaalap - Kiaalap Admin Template</title>
    
<style>
       

    table
    {
        
height: 500px ;  
width: 800px;
  color:rgb(0, 0, 0);
    border-radius:30px;
    padding-top: 2px;
    padding-bottom: 10px;
    padding-top: 5px;
    
    
    }
    
    input[type=text]{
    width: 600px;
    height: 40px;
    
    
    
    
    }
    td{
        font-size: 20px;
    }
    
    #button
    {
    background-color:red;
    color:white;
    height:60px;
    width:140px;
    border-radius:25px;
    }
    
    body
    {
    background-color: gray;
    }
    </style>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
  
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
   
    <!-- modernizr JS
		============================================ -->
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" height="50px" width="180px" alt="" /></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                            <li>
                                    <a class="" href="accueil.html">
                                           
                                        <span class="">Accueil</span>
                                   </a>
                        <li>
                            <a class="" href="ind.php">
                                   <span class="mini-click-non">Adérant</span>
                                </a>
                            
                            
                        </li>
                        <li>
                                <a class="has-arrow" href="index.html">
                                       <span class="educate-icon educate-home icon-wrap"></span>
                                       <span class="mini-click-non">Evenements</span>
                                    </a>
                                
                                
                            </li>
                            
                        
                        <li>
                            <a class="" href="presentation.html">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Présentation</span>
                                </a>
                            
                            
                        </li>
                        <li>
                                <a class="" href="ajouterresidanat.php">
                                       <span class="educate-icon educate-home icon-wrap"></span>
                                       <span class="mini-click-non">Résidnat</span>
                                    </a>
                               
                            </li>
                            <li>
                                    <a class="" href="ajouterpub.php">
                                           <span class="educate-icon educate-home icon-wrap"></span>
                                           <span class="mini-click-non">Publication</span>
                                        </a>
                                    
                                </li>
                                <li>
                                        <a class="" href="index.html">
                                               <span class="educate-icon educate-home icon-wrap"></span>
                                               <span class="mini-click-non">PVs</span>
                                            </a>
                                     
                                        
                                    </li>
                                    <li>
                                            <a class="" href="theses.html">
                                                   <span class="educate-icon educate-home icon-wrap"></span>
                                                   <span class="mini-click-non">Thèses</span>
                                                </a>
                                            
                                            
                                        </li>
                                                            
                    
                </nav>
            </div>
        </nav>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                                    </div>
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                       
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/secretaire.png" alt="" />
                                                            <span class="admin-name">Sec. Fortas Nadia</span> <br>


															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

<div >
<br><br><br><br>
<?php






$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "zakidjellouli";
    $dbname = "userd";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(isset($_POST['btn'])){




  
   $Organisateur= $_POST['Organisateur'];
   $intitulé = $_POST['intitulé'];

    $Type = $_POST['document'];
    $lieu = $_POST['lieu'];
    
$date = $_POST['date'];





   

   $sql = "INSERT INTO `meeting`(`Organisateur`, `intitule`, `Type`, `Lieu`,  `Date`) VALUES ('$Organisateur','$intitulé','$Type','$lieu','$date')"; 
   if($run = mysqli_query($conn,$sql)){?>

<div class="alert alert-success">
<p>meeting enregistré avec succès</p>
</div>
<?php 

}
 else {?>
       <div class="alert alert-warning">
<p> erreur!!</p>
               </div>
            <?php }
}
             ?>

<h2 class="ajouter"> Ajouter Meeting</h2> <br>

    <form action="ajoutermeeting.php" method="POST">
        <table class="formulaire" border="0" bgcolor="black" align="center" cellspacing="20" >
        
        
        <tr>
        <td>Lieu :</td>
        <td><input type="text" name="lieu" placeholder="lieu" required></td>
        </tr>
        
        
        
        
        
        
        <tr>
        <td> Type : </td>
        <td><select required class="document" name="document">
            <option value="">-----</option>
            <option value="Conference">Conférence</option>

            <option value="Congre">Congrè</option>
            <option value="Seminaire">Séminaire</option>
            <option value="Colloque">Colloque</option>

            </select></td>
        </tr>
        <tr>
                <td> intitulé : </td>
                <td><input type="text" name="intitulé" placeholder="intitulé" required></td>
                </tr>
        
        
        
        
        <tr>
        <td>Organisateur :</td>
        <td><input type="text" name="Organisateur" placeholder="Organisateur" required></td>
        </tr>
        
        <tr>
        <td> Date :</td>
        <td><input  name="date" type="date" max="{{datemin}}" required title="du type AAAA-MM-JJ et vous devez avoir 18 ans minimum" placeholder="exemple 1901-01-01" pattern="19[0-9]{2}-[0-9]{2}-[0-9]{2}"/>
        </td>
    </tr>
        
        
        <tr>
        <td colspan="2" align="center"><button type="submit" id="button" name="btn" > Ajouter  </td>
        </tr>

        </table>
        </form>
    
</div>           
           
        

    <!-- jquery
		============================================ -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <!-- price-slider JS
		============================================ -->
   
    <!-- mCustomScrollbar JS
		============================================ -->
   
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- Charts JS
		============================================ -->
    
</body>

</html>