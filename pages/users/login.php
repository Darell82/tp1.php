<?php
use Core\Auth\DBAuth;
$app2 = App::getInstance();
$auth2 = new DBAuth($app2->getDb());

if ($auth2->logged()){
	header("location: admin.php");
}
?>

<h2>connexion</h2>

<hr>
<div class="row">
<div class="col-md-4">
<form method="Post" action="admin.php">
<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
<br>
<input type="password" class="form-control" name="password" placeholder="Mot de Passe">	
<br>
<input class="btn btn-primary" type="submit">
</div>
</div>
</form>