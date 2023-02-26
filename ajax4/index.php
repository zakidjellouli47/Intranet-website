<?php

?>


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
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
	</style>
</head>

<body>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row m-3 text-center">
				<div class="col-lg-12">
					<h1 class="box-title">Liste Des Adherents</h1>
				</div>
			</div>
			<div  class="row justify-content-center">
				<div class="col-lg-6">
				<a href="../adherent.php">	<button type="button" class="btn btn-lg btn-primary"   >Retour </button>	</a>
				</div>
				<div class="col-lg-6">
					<input type="text" id="search" class="form-control" placeholder="Search Now">
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
					<label><b>Date_Adhesion</b></label>
					<input type="date" name="date_adhesion" class="form-control" placeholder="Date_Adhesion">
					<span class="error-msg" id="msg_1"></span>
			  	</div>
			  	<div class="form-group">
					<label><b>Date_Fin_Adhesion</b></label>
					<input type="date" name="date_fin_adhesion" class="form-control" placeholder="Date_Fin_Adhesion">
					<span class="error-msg" id="msg_2"></span>
			  	</div>

			  	<div class="form-group">
					<label><b>Date_Payement</b></label>
					<input type="date" name="date_payement" class="form-control" placeholder="date_naissance">
					<span class="error-msg" id="msg_3"></span>
			  	</div>
				
				<div class="form-group">
					<label><b>Tel</b></label>
					<input type="text" name="tel" class="form-control" placeholder="Tel">
					<span class="error-msg" id="msg_4"></span>
			  	</div>



				<div class="form-group">
					<label><b>Adresse</b></label>
					<input type="text" name="adresse" class="form-control" placeholder="Adresse">
					<span class="error-msg" id="msg_"></span>
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
        <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updata">
      <div class="modal-body">


<div class="form-group">
				<label><b>Date_Adhesion</b></label>
				<input type="date" class="form-control" name="date_adhesion" id="upd_1" placeholder="Date_Adhesion">
				<span class="error-msg" id="umsg_1"></span>
		  	</div>





		  	<div class="form-group">
				<label><b>Date_Fin_Adhesion</b></label>
				<input type="date" class="form-control" name="date_fin_adhesion" id="upd_2" placeholder="Date_Fin_Adhesion">
				<span class="error-msg" id="umsg_2"></span>
		  	</div>

		  	<div class="form-group">
				<label><b>Date_Payement</b></label>
				<input type="date" class="form-control" name="date_payement" id="upd_3" placeholder="Date_Payement">
				<span class="error-msg" id="umsg_3"></span>
		  	</div>
			

			<div class="form-group">
				<label><b>Adresse</b></label>
				<input type="text" class="form-control" id="upd_4" name="adresse">
				<span class="success-msg" id="umsg_4"></span>
		  	</div>

		  	<div class="form-group">
				<label><b>Tel</b></label>
				<input type="text" class="form-control" name="tel" id="upd_8" placeholder="Tel">
				
		  	</div>
			<span class="success-msg" id="umsg_8"></span>
				


<div class="form-group">
				<label><b>Cotisation_Annuaire</b></label>
				<input type="text" class="form-control" id="upd_9" name="cotisation_annuaire" placeholder = "Cotisation_Annuaire">
				<span class="success-msg" id="umsg_9"></span>
		  	</div>



			<div class="form-group">
				<input type="hidden" name="dataval" id="upd_7">
				<span class="success-msg" id="umsg_6"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancle</button>
        <button type="submit" class="btn btn-primary">Update Record</button>
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
        <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="deleterec">Delete Now</button>
      </div>
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
		$('#umsg_6').text("");
		$('#umsg_8').text("");
		$('#umsg_9').text("");
		
       ;

		var check_id = $(this).data('dataid');
		$.getJSON("updateprocess.php", {checkid : check_id}, function(json){
			if(json.status == 0){
				$('#upd_1').val(json.date_adhesion);
				$('#upd_2').val(json.date_fin_adhesion);
				$('#upd_3').val(json.date_payement);
				$('#upd_4').val(json.adresse);
				$('#upd_8').val(json.tel);
				$('#upd_9').val(json.cotisation_annuaire);
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

	//Update Record

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

</body>
</html>
