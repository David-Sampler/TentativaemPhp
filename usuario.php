<?php

abstract class pessoa {
    private $cpf;
    private $nome;

    private $contato;
    private $reclamacao;

    public function __construct($cpf,$nome,$contato)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->contato = $contato;
        
    }

    public function GetPessoa(){
           echo ("Nome: {$this->nome}");
           echo ("Nome: {$this->cpf}");
           echo ("Nome: {$this->contato}");
    }


}



 class usuario extends pessoa  {
        
}





?>