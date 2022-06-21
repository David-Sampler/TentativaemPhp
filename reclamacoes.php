<?php
class reclamacoes{

      private $tipo;
      private $data;
      private $detalhes;

      public function __construct($tipo,$data,$detalhes)
      {
        $this->tipo = $tipo;
        $this->data = $data;
        $this->detalhes = $detalhes;
      }

      public function getResult(){
        echo(""{$this->tipo});
        echo(""{$this->data});
        echo(""{$this->detalhes});
       
      }
}

?>