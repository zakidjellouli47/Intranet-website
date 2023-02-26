<?php

include_once('config.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	
	$match_field['date_adhesion'] = $keyword;
	$match_field['date_fin_adhesion'] = $keyword;
	$match_field['date_payement'] = $keyword;
	$match_field['tel'] = $keyword;
	$match_field['adresse'] = $keyword;
	$match_field['cotisation_annuaire'] = $keyword;
	$select = $user_fun->search("adherent", $match_field, "OR");

}
else{

	$select = $user_fun->select("adherent");

}


?>

				<table class="table" style="vertical-align: middle; text-align: center;">
				  <thead class="thead-dark">
					<tr>
					  	<th scope="col">Id</th>
					  	<th scope="col">Date_Adhesion</th>
					  	<th scope="col">Date_Fin_Adhesion</th>
					  	<th scope="col">Date_Pay</th>
						<th scope="col">Tel</th>
					  	
					  	<th scope="col">Adresse</th>
					  <th scope="col">Cotisation_Annuaire</th>

						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
                        <td><?php echo $se_data['date_adhesion']; ?></td>
					  	<td><?php echo $se_data['date_fin_adhesion']; ?></td>
					  	<td><?php echo $se_data['date_payement']; ?></td>
					  	<td><?php echo $se_data['tel']; ?></td>
						<td><?php echo $se_data['adresse']; ?></td>
						<td><?php echo $se_data['cotisation_annuaire']; ?></td>
						
						
						
						<td>
							<button type="button" class="btn btn-danger editdata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Modifier</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Supprimer</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Archiver</button>
						</td>
					</tr>
					<?php }}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
				  </tbody>
				</table>	