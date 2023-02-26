<?php

$con = mysqli_connect("localhost","root","","userd");

$query=mysqli_query($con,"select * from bilans");
$rowcount=mysqli_num_rows($query);

?>
<table border="1">
<tr>
<td>download</td>
</tr>
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

</table>