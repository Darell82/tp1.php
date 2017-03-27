<?php
$app = App::getInstance();


$categorie = $app->getTable('category')->find($_GET['id']);
if ($categorie===false){
	$app->notFound();
}
$articles = $app->getTable('post')->lastByCategory($_GET['id']);
$categories = $app->getTable('category')->all();
?>

<h1><?= $categorie->titre;  ?></h1>

<div class="row">
	<div class="col-md-8">
	<?php foreach ($articles as $post) : ?>
		  <h2>
		    <a href="<?= $post->Url; ?>">
		      <?= $post->titre;?>  
		    </a>
		  </h2>
		  <p><em><?= $post->category;?></em></p>
		  <p><?= $post->Extrait; ?></p>
		<?php endforeach; ?>
	</div>
	<div class="col-md-4">
		<ul>
			<?php foreach ($categories as $categorie) : ?>

				<li><a href="<?= $categorie->Url; ?>"><?= $categorie->titre; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
