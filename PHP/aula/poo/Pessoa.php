<?php

/*
class Pessoa{
    public $nome;
    public $site;

    public function  falarNome(){
        echo $this->nome;
    }

    public function falarSite(){
        echo $this->site;
    }
}
*/

class Pessoa{
    // private $nome;          // Valor da variável só pode ser acessado dentro da classe onde ela se encontra
    protected $nome;           // Tem a função do private, mas o valor pode ser acessado por outra classe por herança
    const ESPECIE = "Humana";

    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }
    
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
}
