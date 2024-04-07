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
    private $nome;
    
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
}
