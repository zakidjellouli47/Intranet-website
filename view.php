<?php
// Database Connection 
//$conn = new mysqli('localhost', 'root', '', 'userd');

$con = mysqli_connect("localhost","root","","userd");

//$select = "SELECT * FROM `bilans`";
//$result = $conn->query($select);
$query=mysqli_query($con,"select * from bilans where ");
$rowcount=mysqli_num_rows($query);
?>

<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query);

?>
<tr>
<td><a href="pdf/<?php echo $row["fichier"] ?>"><?php echo $row["fichier"] ?></a></td>
</tr>

<?php	
}

?>