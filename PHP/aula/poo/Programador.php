<?php

class Programador extends Pessoa{           // Classe "Programador" herda da classe "Pessoa"
    public $linguagem;

    public function __construct($tempNome, $tempLinguagem)
    {
        $this->nome = $tempNome;
        $this->linguagem = $tempLinguagem;

        echo "<br>Objeto ".__class__." foi instanciado.<br>";
    }

    public function getLinguagem(){
        return $this->linguagem;
    }
}