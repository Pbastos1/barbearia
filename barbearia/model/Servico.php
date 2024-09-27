<?php
  Class Servico{
    private $id_agendamento;
    private $nome;
    private $valor;
    private $id_tipo_servico;
    public function SalvarServico($dados){
      $servico = new Servico();
      $servico->nome = $dados['nome'];
      $servico->valor = $dados['valor'];
      $servico->id_tipo_servico = $dados['id_tipo_servico'];
  }
  }

?>