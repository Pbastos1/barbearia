<?php
  Class Agendamento{
    private $id_agendamento;
    private $id_servico;
    private $id_usuario;
    private $id_agenda;
    private $id_barbeiro;
    public function SalvarAgendamento($dados){
      $agendamento = new Agendamento();
      $agendamento->id_servico = $dados['id_servico'];
      $agendamento->id_usuario = $dados['id_usuario'];
      $agendamento->id_agenda = $dados['id_agenda'];
      $agendamento->id_barbeiro = $dados['id_barbeiro'];
      
  }
    
  }

?>