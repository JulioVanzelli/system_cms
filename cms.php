<?php

// Importação do arquivo de configuração.
require_once __DIR__.'/bootstrap.php';

define("__TEMPLATE__", __ROOT__.'/src/Cms/Template');

use Cms\Application;

session_start();

$app = new Application();

