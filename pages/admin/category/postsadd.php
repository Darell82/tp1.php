<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'])) {
			$res = $app->getTable('category')->create(
				["titre"=>$_POST['titre'], 
				
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=category.edit');
				?>
				<div class="alert alert-success">Bien enregistré</div> 
				<?php
			}
		}
	}

?>

<h2>Ajouté un article</h2>
<form method="post" >
	<input type="hidden" name="id" value="">
	<input class="form-control" type="text" name="titre" value="" placeholder="Nouveau Titre">
	<input class="btn btn-primary" type="submit" name="">
</form>

