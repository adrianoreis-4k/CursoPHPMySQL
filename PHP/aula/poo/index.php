<?php

require "Pessoa.php";
// require_once "Pessoa.php";    Impede a chamada do arquivo mais de uma vez
// include "Pessoa.php";        Não trava a aplicação, mas informa o erro através de um "warning"

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Diego";
$uma_pessoa->site = "www.diegomariano.com";

$uma_pessoa->falarNome();
echo '<br>';
$uma_pessoa->falarSite();