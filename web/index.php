<?php
use Core\Auth\DBAuth;
define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}
//BOUTON CONNECT
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if ($auth->logged()) {
	$connect = "Disconnect";
}else{
	$connect = "login";
}
//FINISH
ob_start();

if ($page==='home') {
	require ROOT.'/pages/posts/home.php';
}elseif ($page==='posts.category') {
	require ROOT.'/pages/posts/category.php';
}elseif ($page==='posts.single') {
	require ROOT.'/pages/posts/single.php';


}elseif ($page==='login') {
	require ROOT.'/pages/users/login.php';
}
elseif ($page==='Disconnect') {
	require ROOT.'/pages/users/disconnect.php';
}

elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}elseif ($page==='404') {
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 