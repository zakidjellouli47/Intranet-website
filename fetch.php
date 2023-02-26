<?php                                                        
    //fetch.php  
    include 'dbcon.php'; 
    if(isset($_POST["employee_id"]))  
    {  
    $query  = "SELECT * FROM adherent WHERE id =           '".$_POST["employee_id"]."'";  
    $result = mysqli_query($conn, $query);  
    $row    = mysqli_fetch_array($result);  
            echo json_encode($row);  
    }  
 ?>