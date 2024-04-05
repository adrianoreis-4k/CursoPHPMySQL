<?php

include 'db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM USUARIOS WHERE USUARIO = $usuario and SENHA = $senha";