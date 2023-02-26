<?php

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ajax Insert || Update || Delete</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.box-title{
			border-radius: 5px;
			box-shadow: 0px 0px 3px 1px gray;
			padding: 10px 0px;
		}


		#p1{


font-family: Arial,"Times New Roman";
color: green;

	font-style: italic;
		text-align: left;
		}


		#p2{


color: red;

	font-style: italic;
	text-align: left;
		}

    
	</style>
</head>

<body>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row m-3 text-center">
				<div class="col-lg-12">
					<h1 class="box-title">Annuaire Des Adhérents </h1>

				
				</div>
			</div>
			<div  class="row justify-content-center">
				<div class="col-lg-6">
				<a href="../adherent.php">	<button type="button" class="btn btn-lg btn-primary"   >Retour </button>	</a>
				</div>
				<div class="col-lg-6">
					<input type="text" id="search" class="form-control" placeholder="Chercher l'adhérent...">
				</div>
			</div>
			<div class="row mt-5" id="tbl_rec">
		
			</div>
		</div>
	</div>
	
<!-- Insert Design Modal -->
	
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="ins_rec">
	      <div class="modal-body">
			  	<div class="form-group">
					<label><b>Nom</b></label>
					<input type="text" name="nom" class="form-control" placeholder="nom">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
			  	<div class="form-group">
					<label><b>Prenom</b></label>
					<input type="text" name="prenom" class="form-control" placeholder="prenom">
					<span class="error-msg" id="msg_2"></span>
			  	</div>

			  	<div class="form-group">
					<label><b>Date_Naiss</b></label>
					<input type="text" name="date_naissance" class="form-control" placeholder="date_naissance">
					<span class="error-msg" id="msg_3"></span>
			  	</div>
				
				<div class="form-group">
					<label><b>Mail</b></label>
					<input type="text" name="mail" class="form-control" placeholder="mail">
					<span class="error-msg" id="msg_4"></span>
			  	</div>



				<div class="form-group">
					<label><b>Specialite</b></label>
					<input type="text" name="specialite" class="form-control" placeholder="mail">
					<span class="error-msg" id="msg_4"></span>
			  	</div>
				
				
				
				

				<div class="form-group">
					<span class="success-msg" id="sc_msg"></span>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" >Add Record</button>
	      </div>
      </form>
    </div>
  </div>
</div>
	
<!-- End Insert Modal -->
		
<!-- Update Design Modal -->
	
<div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalCenterTitle">Modifier l'enregistrement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updata">
      <div class="modal-body">


<div class="form-group">
				<label><b>Id_Service</b></label>
				<input type="text" class="form-control" name="id_service" id="upd_8" placeholder="id_service">
				<span class="error-msg" id="umsg_8"></span>
		  	</div>





		  	<div class="form-group">
				<label><b>Nom</b></label>
				<input type="text" class="form-control" name="nom" id="upd_1" placeholder="nom">
				<span class="error-msg" id="umsg_1"></span>
		  	</div>

		  	<div class="form-group">
				<label><b>Prenom</b></label>
				<input type="text" class="form-control" name="prenom" id="upd_2" placeholder="prenom">
				<span class="error-msg" id="umsg_2"></span>
		  	</div>
			

			<div class="form-group">
				<label><b>Date_Naiss</b></label>
				<input type="date" class="form-control" id="upd_4" name="date_naissance">
				<span class="success-msg" id="umsg_4"></span>
		  	</div>

		  	<div class="form-group">
				<label><b>Email</b></label>
				<input type="text" class="form-control" name="mail" id="upd_3" placeholder="Mail">
				
		  	</div>
			<span class="success-msg" id="umsg_5"></span>
				


<div class="form-group">
				<label><b>Specialite</b></label>
				<input type="text" class="form-control" id="upd_9" name="specialite" placeholder = "specialite">
				<span class="success-msg" id="umsg_9"></span>
		  	</div>



			<div class="form-group">
				<input type="hidden" name="dataval" id="upd_7">
				<span class="success-msg" id="umsg_6"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Annuler</button>
        <button type="submit" class="btn btn-primary">Modifier l'enregistrement</button>
      </div>
      </form>	
    </div>
  </div>
</div>	
	
<!-- End Update Design Modal -->
	
<!-- Delete Design Modal -->
	
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalCenterTitle">Are You Sure Delete This Record ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>If You Click On Delete Button Record Will Be Deleted. We Don't have Backup So Be Carefull.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="deleterec">Supprimer</button>
      </div>
    </div>
  </div>
</div>	
	<div id="archiveEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmarchive" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Archiver l'adhérent sélectionné</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Voulez-vous vraiment archiver ces enregistrements?</p>
      <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
      <input type="submit" name="cmarchive" class="btn btn-danger" value="Archiver">
     </div>
    </form>
   </div>
  </div>
 </div>
 <div id="archiveEmployeeModalselected" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmarchive" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Archiver l'adherént sélectionné</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Voulez-vous vraiment archiver ces enregistrements?</p>
      <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
      <a href="#" id="cmarchiveselected" class="btn btn-danger">Archiver</a>
     </div>
    </form>
   </div>
  </div>
 </div>
<!-- End Delete Design Modal -->
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript">
	
$(document).ready(function (){
	$('#tbl_rec').load('record.php');

	$('#search').keyup(function (){
		var search_data = $(this).val();
		$('#tbl_rec').load('record.php', {keyword:search_data});
	});

	//insert Record

	$('#ins_rec').on("submit", function(e){
		e.preventDefault();
		$.ajax({

			type:'POST',
			url:'insprocess.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#close_click').trigger('click');
				}
				else if(json.status == 102){
					$('#sc_msg').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#msg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#msg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#msg_3').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 106){
					$('#msg_4').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 107){
					$('#msg_5').text(json.msg);
					console.log(json.msg);
				}

				else if(json.status == 108){
					$('#msg_6').text(json.msg);
					console.log(json.msg);
				}

				else if(json.status == 109){
					$('#msg_7').text(json.msg);
					console.log(json.msg);
				}

				else if(json.status == 110){
					$('#msg_8').text(json.msg);
					console.log(json.msg);
				}

				else if(json.status == 111){
					$('#msg_9').text(json.msg);
					console.log(json.msg);
				}





				else{
					console.log(json.msg);
				}

			}

		});

	});

	//select data

	$(document).on("click", "button.editdata", function(){
		$('#umsg_1').text("");
		$('#umsg_2').text("");
		$('#umsg_3').text("");
		$('#umsg_4').text("");
		$('#umsg_5').text("");
		$('#umsg_6').text("");
		$('#umsg_7').text("");
		$('#umsg_8').text("");
		$('#umsg_9').text("");
		
       ;

		var check_id = $(this).data('dataid');
		$.getJSON("updateprocess.php", {checkid : check_id}, function(json){
			if(json.status == 0){
				$('#upd_1').val(json.nom);
				$('#upd_2').val(json.prenom);
				$('#upd_3').val(json.mail);
				$('#upd_4').val(json.date_naissance);
				$('#upd_8').val(json.id_service);
				$('#upd_9').val(json.specialite);
				$('#upd_7').val(check_id);
				if(json.gender == 'Male'){
					$('#upd_5').prop("checked", true);
				}
				else{
					$('#upd_6').prop("checked", true);
				}
			}
			else{
				console.log(json.msg);
			}
		});
	});

	//Modifier l'enregistrement

	$('#updata').on("submit", function(e){
		e.preventDefault();

		$.ajax({

			type:'POST',
			url:'updateprocess2.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
				else if(json.status == 102){
					$('#umsg_6').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 103){
					$('#umsg_1').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 104){
					$('#umsg_2').text(json.msg);
					console.log(json.msg);
				}
				else if(json.status == 105){
					$('#umsg_3').text(json.msg);
					console.log(json.msg);
				}
				

else if(json.status == 110){
					$('#umsg_9').text(json.msg);
					console.log(json.msg);
				}

				


				else{
					console.log(json.msg);
				}

			}

		});

	});

	//delete record

	var deleteid;

	$(document).on("click", "button.deletedata", function(){
		deleteid = $(this).data("dataid");
	});

	$('#deleterec').click(function (){
		$.ajax({
			type:'POST',
			url:'deleteprocess.php',
			data:{delete_id : deleteid},
			success:function(data){
				var json = JSON.parse(data);
				if(json.status == 0){
					$('#tbl_rec').load('record.php');
					$('#de_cancle').trigger("click");
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}
			}
		});
	});


});

</script>


<script type="text/javascript">
$(document).ready(function(){
 // Activate tooltip
 $('[data-toggle="tooltip"]').tooltip();
  
 // Select/Deselect checkboxes
 var checkbox = $('table tbody input[type="checkbox"]');
 $("#selectAll").click(function(){
  if(this.checked){
   checkbox.each(function(){
    this.checked = true;                        
   });
  } else{
   checkbox.each(function(){
    this.checked = false;                        
   });
  } 
 });
 checkbox.click(function(){
  if(!this.checked){
   $("#selectAll").prop("checked", false);
  }
 });
    $('#cmdeleteselected').click (function(event) {
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("ajaxdeleteselected.php", {selected: selected },
        function(data){
   $('#deleteEmployeeModalselected').modal('hide');
            $('.result').html(data);
        });  
    });
});



// Select/Deselect checkboxes
var checkbox = $('table tbody input[type="checkbox"]');
 $("#selectAll").click(function(){
  if(this.checked){
   checkbox.each(function(){
    this.checked = true;                        
   });
  } else{
   checkbox.each(function(){
    this.checked = false;                        
   });
  } 
 });
 checkbox.click(function(){
  if(!this.checked){
   $("#selectAll").prop("checked", false);
  }
 });
    $('#cmarchiveselected').click (function(event) {
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("ajaxarchiveselected.php", {selected: selected },
        function(data){
   $('#archiveEmployeeModalselected').modal('hide');
            $('.result').html(data);
        });  
    });
    $('#cmarchiveselected').click (function(event) {
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  
});


</script>


<?php
$servername =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   'userd';
 
    $conn       =   mysqli_connect($servername, $username, $password, "$dbname");
    mysqli_set_charset($conn, "utf8");
    if($conn === false)
    {
        die("ERROR: Could not connect. " .mysqli_connect_error());
    }

    //zakisadf1456@ou


$archiveemployee = (isset($_GET['archiveemployee']))?$_GET['archiveemployee']:'';


if ($archiveemployee==''){
}else{
echo "<script type= 'text/javascript'>$(document).ready(function(){ $('#archiveEmployeeModal').modal() });</script>";
}
if(isset($_POST["cmarchive"])){

    $sql = "UPDATE adherent SET etat=0 WHERE id='$archiveemployee'";

    
    
 if ($conn->query($sql) === TRUE) {
     
     
  echo "<script type= 'text/javascript'>alert('enregistrement archivé avec succès');
</script>";  

echo '<meta http-equiv="refresh" content="2;url=index.php" />';    exit;
  
 } else {
  echo "<script type= 'text/javascript'>alert('Error deleting record: " . $sql . "<br>" . $conn->error."');</script>"; 
 }
}
























?>

</body>
</html>
