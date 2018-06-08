<?php

use Cms\Controller\LoginController;
use Cms\Controller\HomeController;

$router->before('GET', '/.*', function () {
    header('X-Powered-By: bramus/router');
});

$router->set404(function () {
	require __TEMPLATE__.'/404/index.phtml';
});

$router->get('/', function () {
	echo 'Verificar Sessao';
});

$router->get('/home', function () {
	echo 'Mostrar Tela Principal';
});

$router->get('/noticia/(\w+)', function ($title) {
    echo 'Abrir Post > '. $title;
});

$router->get('/usuario', function () {
	echo 'Lista/ Editar/ Cadastrar Usuarios';
});

/*$router->get('/', function(){
    $var = new LoginController();
    $var->loginAction();
});
*/
/*$router->get('/home', function () {
    $var = new LoginController();
    $var->loginAction(); 
});*/

$router->post('/logar', function(){
  	$var = new LoginController();
    exit($var->logarAction($_POST['usuario'], $_POST['senha']));
});

$router->post('/deslogar', function(){
  	$var = new LoginController();
    exit($var->deslogarAction());
});

