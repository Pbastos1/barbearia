<?php
  Class Usuario{
    private $id_usuario;
    private $nome;
    private $email;
    private $id_grupo;
    public function SalvarUsuario($dados){
      $usuario = new Usuario();
      $usuario->nome = $dados['nome'];
      $usuario->email = $dados['email'];
      $usuario->id_grupo = $dados['id_grupo'];

    }
    public function ListarUsuario(){

    }
    public function UpdateUsuario($usuario){

    }
}

?>