<?php

namespace Cms;

use Cms\Controller;
use \Bramus\Router\Router;

class Application {

    public function run($router){
		$router->run();
	}

}