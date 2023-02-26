<?php
	$link = mysqli_connect('localhost','root','','userd');
mysqli_set_charset($link, "utf8");

if( isset($_GET['edit3'])){
	$edit_id  = $_GET['edit3'];



	$query =mysqli_query($link,"select * from presentation where id = $edit_id");
	while($row=mysqli_fetch_array($query)){
$id =$row['0'];
$name = $row['1'];
$em = $row['2'];
$comp =$row['3'];





	}
 }
?>



<style>
.swagButton{
color: #31A6FF;
font-family: "proxima nova";
font-weight: 100;
font-size: 20px;
text-align: center;
border: solid 2px #31A6FF;
border-radius: 50px;
padding: 10px 40px;
margin-left: 520px;

-webkit-transition-duration:200ms;
transition-duration:200ms;
}
.swagButton:hover{

background-color: #31A6FF;
color: #fff;



  }

  .up{
color: #31A6FF;
font-family: "proxima nova";
font-weight: 100;
font-size: 20px;
text-align: center;
border: solid 2px #31A6FF;
border-radius: 50px;
padding: 10px 40px;
margin-left: 497px;

-webkit-transition-duration:200ms;
transition-duration:200ms;
}
.up:hover{

background-color: #31A6FF;
color: #fff;



  }

</style>

 
<?php if(!empty($id)){ ?>
<form action="edit3.php?edit_form=<?php echo $id ?>" method="POST">
<?php } ?>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<textarea rows="20" cols="40" type = "text"  name="presentation"/> <?php echo $name?> </textarea>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<textarea rows="20" cols="40" type = "text"  name="but"/> <?php echo $em?> </textarea>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<textarea rows="20" cols="40" type = "text"  name="composition"/> <?php echo $comp?> </textarea>
</br></br>

<input type="submit" class="swagButton"   name="update" value="mettre à jour" /> 
</br></br></br>
<a href="pres.php"     class="up"  > ne pas mettre à jour </a>
</form>

<?php

$link = mysqli_connect('localhost','root','','userd');
mysqli_set_charset($link, "utf8");
if(isset($_POST['update'])){ 
$id = $_GET['edit_form'];
$presentation = $_POST['presentation'];
$but = $_POST['but'];
$composition = $_POST['composition'];
   if(mysqli_query($link,"UPDATE presentation set presentation ='$presentation' , but ='$but',composition = '$composition'  ")){
	

echo "<script type= 'text/javascript'>alert('Enregistrement mis à jour avec succès');
  window.location.replace('pres.php');</script>";



}


}
?>