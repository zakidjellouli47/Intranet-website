<?php 
session_start();
 
    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        
    }
    else
    {
        header("location:index.php");
    }
 
?>