<?php
  Class DadoBancario{
    private $id_dado_bancario;
    private $id_usuario;
    private $nome_banco;
    private $numero_conta;
    private $agencia;
    private $pix;
    public function SalvarDadoBancario($dados){
      $dado = new DadoBancario();
      $dado->id_usuario = $dados['id_usuario'];
      $dado->nome_banco = $dados['nome_banco'];
      $dado->numero_conta = $dados['numero_conta'];
      $dado->agencia = $dados['agencia'];
      $dado->pix = $dados['pix'];

    }
    
  }

?>