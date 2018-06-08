<?php

require __DIR__.'/Database/Connection.php';
$GLOBALS['conn'] = require __DIR__ . '/config/db.php';

define('__ROOT__', __DIR__);
define('__CSS__', __ROOT__.'/public/css');
define('__JS__', __ROOT__.'/public/js');

// carregamos o autoloader
$loader = require __DIR__.'/vendor/autoload.php';
$loader->add('Cms', __DIR__.'/src');
 
// Rotas
$router = new \Bramus\Router\Router();

require __DIR__ . '/src/Cms/routes.php';