<?php
include"dbcon.php"; 
if(isset($_POST["selected"]))
{

$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM publication WHERE id='$value'";
 if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully $value <br/>";  
 } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
}
?>