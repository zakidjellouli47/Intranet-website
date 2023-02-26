<?php
if(isset($_POST["selected"]))
{

include"dbcon.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM comptes WHERE id='$value'";
 if ($conn->query($sql) === TRUE) {
  
   echo '<meta http-equiv="refresh" content="1;url=comptes.php" />';     } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
}
?>