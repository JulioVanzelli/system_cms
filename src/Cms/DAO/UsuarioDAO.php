<?php

namespace Cms\DAO;

use Cms\Core\DAO;
use Cms\Model\Usuario;

class UsuarioDAO extends DAO {

    /**
     * Validar se o login e senha são válidas
     * Retorna um false caso não seja encontrado o usuário
     * do contrário iré retornar um true
    **/
    public function logar($username, $password){
        // Buscar o usuario cadastrado
        $sql = <<<SQL 
            SELECT 
                id_usuario, 
                nm_usuario, 
                ds_senha 
            FROM tb_usuario 
            WHERE nm_usuario = :username;
SQL;

        // Prepara o SQL para ser executado
        $execute = $this->conexao->prepare($sql);

        // Filtro por nome de usuário
        $execute->bindParam(":username", $username);
        $execute->execute();

        // Verifica se foi retornado informação
        if($execute->rowCount() == 0)
            return false;

        // Transforma os dados obtidos em Object
        $data = $execute->fetch(\PDO::FETCH_OBJ);

        if (md5($password) != $data->ds_senha)
            return false;
            
        return $data; //CASO A SENHA SEJA VERDADEIRA RETORNA O USUÁRIO
    }

    public function listarUsuarios(){

    }

    public function buscarUsuarioPorId($idUsuario){

    }

    public function cadastrarUsuario(Usuario $usuario){

    }

    public function atualizarUsuario(Usuario $usuario){

    }
}