<?php

namespace Cms\Model;

class Usuario {

    private $usuario;
    private $senha;

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getSenha(){
		return $this->senha;
	}
 
	public function setSenha($senha){
		$this->senha = $senha;
	}
}