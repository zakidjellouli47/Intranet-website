<?php
	include_once('db.php');
 
	if( isset($_GET['edit1']) )
	{
		$id = $_GET['edit1'];
		$res= mysqli_query("SELECT * FROM presentation WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newName']) )
	{
		$newName = $_POST['variable'];
		$newName1 =$_POST['variable1'];
		$newName2 = $_POST['variable2'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE presentation SET variable='$newName' variable1='$newName1' variable2='$newName2' WHERE id='$id'";
		$res 	 = mysqli_query($sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=pres.php'>";
	}
 
?>


