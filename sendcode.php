<?php  
$con=mysqli_connect('localhost','root','','userd');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    ?>