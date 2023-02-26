<?php  
 if(isset($_POST["employee_id"]))  
 {  
     $output = '';  
     $connect = mysqli_connect("localhost", "root", "zakidjellouli", "userd");  
     $query = "SELECT * FROM adherent WHERE id = '".$_POST["employee_id"]."'";  
     $result = mysqli_query($connect, $query);  
     $output .= '  
     <div class="table-responsive">  
           <table class="table table-striped table-hover">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td><label>Name</label></td>  
                     <td>'.$row["id"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Address</label></td>  
                     <td>'.$row["nom_et_prenom"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Gender</label></td>  
                     <td>'.$row["date_naissance"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Designation</label></td>  
                     <td>'.$row["mail"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["specialite"].' Year</td>  
                </tr>  

                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["date_adhesion"].' Year</td>  
                </tr> 
                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["date_fin_adhesion"].' Year</td>  
                </tr> 
                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["tel"].' Year</td>  
                </tr> 
                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["adresse"].' Year</td>  
                </tr> 
                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["cotisation_annauire"].' Year</td>  
                </tr> 

                <tr>  
                     <td><label>Age</label></td>  
                     <td>'.$row["date_payement"].' Year</td>  
                </tr> 
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>