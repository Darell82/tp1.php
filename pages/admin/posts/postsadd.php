<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'] && $_POST['contenu'])) {
			$res = $app->getTable('post')->create(
				["titre"=>$_POST['titre'], 
				"contenu"=>$_POST['contenu']
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=posts.edit');
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
	<textarea class="form-control" name="contenu" placeholder="Contenu Articles" ></textarea>
	<input class="btn btn-primary" type="submit" name="">
</form>

