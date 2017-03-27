<?php
$posts = App::getInstance()->getTable('Post')->all();

?>


<h1>COUCOU COMING PTRUEL</h1>


<table class="table">
	<thead>
		<tr>
			<td>ID</td>
			<td>TITRE</td>
			<td>ACTION</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post) : ?>
		<tr>
			
		<td><?= $post->id; ?></td>
		<td><?= $post->titre; ?></td>
		<td><a href="admin.php?p=posts.single&id=<?=$post->id;?>"><button>edit</button>

<form method="post" action="admin.php?p=posts.delete" style="display: inline-block;">
	<input type="hidden" name="id" value="<?= $post->id; ?>">
	<input class="btn btn-danger" type="submit" name="OK" value="Delete">
</form>
			</a>
		</td>


		</tr>
	<?php endforeach; ?>
	</tbody>
</table>