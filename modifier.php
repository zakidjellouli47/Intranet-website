
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
                            <a class="" href="index.html">
                                   <span class="mini-click-non">Adérant</span>
                                </a>
                            
                            
                        </li>
                        <li>
                                <a class="" href="index.html">
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
                                <a class="" href="index.html">
                                       <span class="educate-icon educate-home icon-wrap"></span>
                                       <span class="mini-click-non">Statuts</span>
                                    </a>
                               
                            </li>
                            <li>
                                    <a class="" href="index.html">
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
                                            <a class="" href="theses.php">
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



$connection = mysqli_connect("localhost","root","zakidjellouli");
                $db = mysqli_select_db($connection, 'userd');
                $query = "SELECT * FROM these where Titre ='$'";
                $Titre = $_GET['m'];
                $query_run = mysqli_query($connection, $query);
?>



<?php

while ($row = mysqli_fetch_array($query_run)) {
	# code...


?>

<tr>
<td> <?php echo $row['Titre']; ?> </td>  
</tr>
<tr>
<td> <?php echo $row['Nom_Auteur']; ?> </td>  
</tr>
<tr>
<td> <?php echo $row['Option_Thesee']; ?> </td>  
</tr>
<tr>
<td> <?php echo $row['Directeur_These']; ?> </td>  
</tr>

<tr>
<td> <?php echo $row['Lieu']; ?> </td>  
</tr>

<tr>
<td> <?php echo $row['Annee']; ?> </td>  
</tr>

<tr>
<td> <?php echo $row['Abstract']; ?> </td>  
</tr>

















?>
<h2 class="ajouter"> modifier la  thèse</h2> <br>

    <form action="upload.php" method="POST">
        <table class="formulaire" border="0" bgcolor="black" align="center" cellspacing="20" >
        <tr>
        <td> Titre :</td>
        <td><input type="text" name="Titre" placeholder="Titre" required></td>
        </tr>
        
        <tr>
        <td>Nom d'auteur :</td>
        <td><input type="text" name="Nom_Auteur" placeholder="Nom_Auteur" required></td>
        </tr>
        
        
        
        
        
        
        <tr>
        <td> Option : </td>
        <td><input type="text" name="Option_These" placeholder="Option" required></td>
        </tr>
        <tr>
                <td> Domaine : </td>
                <td><input type="text" name="Option_These" placeholder="Domaine" required></td>
                </tr>
        
        
        
        
        <tr>
        <td>Directeur du thèse :</td>
        <td><input type="text" name="Directeur_These" placeholder="Dirécteur_Thèse" required></td>
        </tr>
        
        <tr>
        <td>Lieu:</td>
        <td><input type="text" name="Lieu" placeholder="Lieu" required></td>
        </tr>
        
        
        
        
        <tr>
        <td> Année : </td>
        <td><input type="date" name="Annee"   placeholder="Année" required></td>
        </tr>
        
        <tr>
        <td> Lien :</td>
        <td><input type="url"  name="Abstract" placeholder="Abstract" required></td>
        </tr>
        
        
        <tr>
        <td colspan="2" align="center"><button type="submit" id="button" name="btn" > modifier la thèse </td>
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