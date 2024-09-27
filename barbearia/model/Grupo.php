<?php
  Class Grupo{
    private $id_grupo;
    private $nome;
    public function SalvarGrupo($dados){
      $grupo = new Grupo();
      $grupo->nome = $dados['nome'];
  }

?>