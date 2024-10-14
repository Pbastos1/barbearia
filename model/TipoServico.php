<?php
  Class TipoServico{
    private $id_tipo_servico;
    private $tipo;
    public function SalvarTipoServico($dados){
      $tiposervico = new TipoServico();
      $tiposservico->tipo = $dados['tipo'];
  }
  }

?>