<?php
  Class Agenda{
    private $id_agenda;
    private $dia_semana;
    private $hora_inicio;
    private $hora_fim;
    private $hora_intervalo_inicio;
    private $hora_intervalo_fim;
    private $id_usuario;
    public function SalvarAgenda($dados){
      $agenda = new Agenda();
      $agenda->dia_semana = $dados['dia_semana'];
      $agenda->hora_inicio = $dados['hora_inicio'];
      $agenda->hora_fim = $dados['hora_fim'];
      $agenda->hora_intervalo_inicio = $dados['hora_intervalo_inicio'];
      $agenda->hora_intervalo_fim = $dados['hora_intervalo_fim'];
      $agenda->id_usuario = $dados['id_usuario'];

    }
  }

?>