<?php 

require_once('sendcode.php');
session_start();

if(isset($_POST['Login1']))
    {
    	if(empty($_POST['username'])  &&  empty($_POST['password'])){
    
header("Location: ./tresorier.php?Connexion=empty");

  // echo "<script>alert('username  and password are blank') ;   </script>";


 exit();
    	}
           
    	



   
   	if(empty($_POST['username'])  &&  !empty($_POST['password'])){
   




   //	echo "<script>alert('username blank') ;   </script>";}


   
   header("Location: ./tresorier.php?Connexion=usernameempty");}



   if(!empty($_POST['username']) &&  empty($_POST['password'])){
  //  echo "<script>alert('password blank') ;   </script>";

 header("Location: ./tresorier.php?Connexion=passwordempty");

 exit();


   }




           
   
                   
      





           

if(!empty($_POST['username'])  &&  !empty($_POST['password'])){



//$query="select * from comptes where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,"SELECT id,username,password FROM comptes WHERE id = '3'");


            if(mysqli_fetch_assoc($result)){


            	$_SESSION['User']=$_POST['username'];
                header("location:accueil3.html");
            }
            else{
          //   echo "<script>alert('please enter correct username and password') ;   </script>";

             header("Location: ./tresorier.php?Connexion=upf");

            }




}

else{


echo "not working";
}

}
//https://www.onlineittuts.com/.html


?>