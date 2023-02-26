<?php

include_once('config.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	$match_field['nom'] = $keyword;
	$match_field['prenom'] = $keyword;
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
					  	<th scope="col">Nom</th>
					  	<th scope="col">Prenom</th>
						<th scope="col">Date_Naiss</th>
					  	<th scope="col">Mail</th>
						
						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
					  	<td><?php echo $se_data['nom']; ?></td>
					  	<td><?php echo $se_data['prenom']; ?></td>
					  	<td><?php echo $se_data['date_naissance']; ?></td>
						<td><?php echo $se_data['mail']; ?></td>
						
						<td>
							<button type="button" class="btn btn-danger editdata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Modifier</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Supprimer</button>
						</td>
					</tr>
					<?php }}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
				  </tbody>
				</table>	

				