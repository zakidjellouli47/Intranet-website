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
						
					  	
					  	<th scope="col">Email</th>
					  <th scope="col">Spécialite</th>
					    <th scope="col">Adresse</th>
					     <th scope="col">Télephone</th>
                       <th scope="col">Etat</th>
						<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
                        
					  	<td><?php echo $se_data['nom']; ?></td>
					  	<td><?php echo $se_data['prenom']; ?></td>
						<td><?php echo $se_data['mail']; ?></td>
						<td><?php echo $se_data['specialite']; ?></td>
						<td><?php echo $se_data['adresse']; ?></td>
						<td><?php echo $se_data['tel']; ?></td>
						<td><?php echo $se_data['etat']; ?></td>
						
						
						
						<td>
							<button type="button" class="btn btn-success editdata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Modifier</button>
							<button type="button" class="btn btn-primary deletedata" data-dataid="<?php echo $se_data['id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Supprimer</button>
							<a href="?archiveemployee=<?php echo $se_data['id']; ?>" class="btn btn-danger" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="archiver">Archiver </i></a>
							
					</tr>
					<?php }}else{ echo "<tr><td colspan='7'><h2>Aucun résultat trouvé</h2></td></tr>"; } ?>
				  </tbody>
				</table>	