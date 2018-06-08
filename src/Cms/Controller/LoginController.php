<?php

namespace Cms\Controller;

use Cms\Core\Controller;
use Cms\DAO\UserDAO;
use Database\Connection;

class LoginController extends Controller {

    protected function carregaTemplate($module, $template){
        require __TEMPLATE__.'/'.$module.'/'.$template.'.phtml';
    }

    public function loginAction() {

        if (isset($_SESSION['user'])) {
            $this->carregaTemplate('Home','index');
            return true;
        }

        $this->carregaTemplate('Login','index');

        return false;  
    }

    public function logarAction($usuario, $senha) {
        $userDao = new UserDAO();

        $result = $userDao->logar($usuario, $senha);

        if(!$result)
            return json_encode($result);
        
        $_SESSION['user'] = $usuario;

        return json_encode($result);
    }

    public function deslogarAction() {

        unset($_SESSION['user']);

        return json_encode(true);
    }

    public function redireciona($logado = false){

        if($logado)
            $this->carregaTemplate('Home','index');

        $this->carregaTemplate('Login','index');
    }
    
}
