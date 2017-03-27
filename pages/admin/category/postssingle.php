<?php
    $app = App::getInstance();

    if ($_POST) {
        if (!empty($_POST['id'] && $_POST['titre'])) {
            $res = $app->getTable('category')->update($_POST['id'], ['titre'=>$_POST['titre']]);
            if ($res) {
                //message flash
                header('location: admin.php?p=category.edit');

            }
        }
    }

    $category = $app->getTable('category')->find($_GET['id']);
    if ($category===false) {
        $app->notFound();
    }
    $app->titre = $category->titre;
?>

<h2>Modifier</h2>
<form method="post">
    <input type="hidden" name="id" value="<?= $category->id; ?>">
    <input type="text" class="form-control" name="titre" value="<?= $category->titre; ?>">
    <input type="submit" class="btn btn-primary">
</form>