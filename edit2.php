<?php








if ($coonect = mysqli_connect('localhost','root','','userd')){







$sql = "select * from presentation where id ='1' ";

$query = mysqli_query($coonect,$sql);



while(mysqli_fetch_object($query)){


?>

<form action="<?php echo $PHP_SELF;?>" method="POST" >

<input class="form-control" type="hidden" name="id" value="<?php echo $row->id; ?>" >

<input class="form-control" type="text" name="pres" value="<?php echo $row->pres; ?>">


<input class="form-control" type="text" name="but" value="<?php echo $row->but; ?>">

<input class="form-control" type="text" name="composition" value="<?php echo $row->composition; ?>">


<input class="form-control" type="submit" name="submit" value="modifier">

</form>

<?php

}


$sql2 = "UPDATE presentation SET pres = '$pres',but = '$but', composition = '$composition' WHERE id = '$id' ";
$query2 = mysqli_query($coonect,$sql2);








if (isset($_POST['submit'])) {

	echo "string";
	
}
else{


	echo "3";
}


	


}
else{

	echo "error";
}

?>
