<?php



if ($coonect = mysqli_connect('localhost','root','zakidjellouli','userd')){


$sql = "select * from presentation where id ='$id' ";

$query = mysqli_query($coonect,$sql);


while(mysqli_fetch_object($query)){






$sql2 = "UPDATE presentation SET presentation = '$presentation',but = '$but', composition = '$composition' WHERE id = '$id' ";
$query2 = mysqli_query($coonect,$sql2);




}
if ($_POST['submit']) {

	echo "string";
	# code...
}
else{


	echo "1";
}


	# code...
}
else{

	echo "error";
}



?>