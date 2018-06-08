<?php

namespace Cms\Model;

class Post {

    private $titulo;
    private $corpo;
    private $caminho;

    public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getCorpo(){
		return $this->corpo;
	}

	public function setCorpo($corpo){
		$this->corpo = $corpo;
	}

	public function getCaminho(){
		return $this->caminho;
	}

	public function setCaminho(){
		return $this->caminho;
	}

}