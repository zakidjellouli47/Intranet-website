<?php
include 'dbcon.php'; 

//delete.php
if(isset($_POST["id"]))
{
    foreach($_POST["id"] as $id)
    {
        $query = "DELETE FROM adherent WHERE id = '".$id."'";
        mysqli_query($conn, $query);
    } 
}
?>