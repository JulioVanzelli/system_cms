<?php

namespace Cms\Core;

use Database\Connection;

class DAO {

	protected $conexao;

	// Abre a conexao com o Banco de Dados
	public function __construct(){
		 $this->conexao = Connection::openConnection();
	}
}