<?php 

require_once('sendcode.php');
session_start();

if(isset($_POST['Login']))
    {
    	if(empty($_POST['username'])  &&  empty($_POST['password'])){
    
header("Location: ./adminstrateur.php?Connexion=empty");

  // echo "<script>alert('username  and password are blank') ;   </script>";


 exit();
    	}
           
    	



   
   	if(empty($_POST['username'])  &&  !empty($_POST['password'])){
   




   //	echo "<script>alert('username blank') ;   </script>";}


   
   header("Location: ./adminstrateur.php?Connexion=usernameempty");}



   if(!empty($_POST['username']) &&  empty($_POST['password'])){
  //  echo "<script>alert('password blank') ;   </script>";

 header("Location: ./adminstrateur.php?Connexion=passwordempty");

 exit();


   }




           
   
                   
      





           

if(!empty($_POST['username'])  &&  !empty($_POST['password'])){

$compte = $_POST['compte'];
$password = $_POST['password'];
$username = $_POST['username'];

 
$query="select * from comptes where username='$username' and password='$password' and compte = '$compte' ";
            $result=mysqli_query($con,$query);

while ( $row =mysqli_fetch_array($result)) {
if ($row['username'] == $username && $row['password'] == $password && $row['compte'] =='president') {
  # code...

  header("location:accueil2.html");
}


  # code...

           // if(mysqli_fetch_assoc($result)){


            //	$_SESSION['User']=$_POST['username'];
                
           // }
            else{
          //   echo "<script>alert('please enter correct username and password') ;   </script>";

             header("Location: ./adminstrateur.php?Connexion=upf");

            }


}

}

else{


echo "not working";
}

}
//https://www.onlineittuts.com/.html


?>