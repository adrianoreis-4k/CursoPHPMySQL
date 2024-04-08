<?php

require "Pessoa.php";
require "programador.php";
// require_once "Pessoa.php";    Impede a chamada do arquivo mais de uma vez
// include "Pessoa.php";        Não trava a aplicação, mas informa o erro através de um "warning"

// $uma_pessoa = new Pessoa;
// $pessoa->nome = "Diego";
// $pessoa->site = "www.diegomariano.com";      Só funcionam se as variáveis forem "public"

/*
$pessoa->falarNome();
echo '<br>';
$pessoa->falarSite();
*/

// $pessoa->setNome("Adriano");         // Altera o valor da variável "nome".

// $pessoa = new Pessoa("Diego");
// echo $pessoa->getNome();            // Pega o valor da variável.


$programador = new Programador("Diego", "PHP");
echo $programador->getNome();
echo '<br>';
echo $programador->getLinguagem();
echo '<br>';

# constantes
echo $programador::ESPECIE;
