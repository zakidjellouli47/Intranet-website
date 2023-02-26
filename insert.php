<?php  

include 'dbcon.php';

 if(!empty($_POST))  
 {  
     $output       = '';  
     $message      = '';  
     $nom_et_prenom        = mysqli_real_escape_string($conn, $_POST["nom_et_prenom"]);  
     $date_naissance      = mysqli_real_escape_string($conn, $_POST["date_naissance"]);  
     $mail      = mysqli_real_escape_string($conn, $_POST["mail"]);  
     $tel  = mysqli_real_escape_string($conn, $_POST["tel"]);    
     if($_POST["employee_id"] != '')  
     {  
          $query = "  
          UPDATE adherent  
          SET nom_et_prenom       ='$nom_et_prenom',   
          date_naissance       ='$date_naissance',   
          mail        ='$mail',   
          tel    = '$tel',    
          WHERE id='".$_POST["employee_id"]."'";  
          $message       = 'Data Update has been Successfully!';  
     }  
     else  
     {  
          $query = "  
          INSERT INTO adherent(nom_et_prenom, date_naissance, mail,tel)  
          VALUES('$nom_et_prenom', '$date_naissance', '$mail', '$tel');  
          ";  
          $message = 'Data insert has been Successfully!';  
     }  
     if(mysqli_query($conn, $query))  
     {  
          $output .= '<label class="text-success">' . $message . '</label>';  
          $select_query = "SELECT * FROM adherent ORDER BY id DESC";  
          $result = mysqli_query($conn, $select_query);  
          $output .= '  
               <table class="table table-striped table-hover">  
                    <tr>  
                         <th>Nom et Prenom</th>  
                         <th>Date de Naissance</th>  
                         <th>Mail</th>  
                         <th>Tel</th>   
                         <th>Edit</th>  
                         <th>Delete</th>  
                    </tr>  
          ';  
           while($row = mysqli_fetch_array($result))  
           {  
               $output .= '  
                    <tr>  
                         <td>' . $row["nom_et_prenom"] . '</td>  
                         <td>' . $row["date_naissance"] . '</td>  
                         <td>' . $row["mail"] . '</td>  
                         <td>' . $row["tel"] . '</td>  
                          
                         <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                         <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>  
                    </tr>  
               ';  
          }  
          $output .= '</table>';  
      }  
      echo $output;  
}  
?>