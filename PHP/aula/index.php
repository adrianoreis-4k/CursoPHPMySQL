<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'home';
}


if($pagina == 'cursos'){
    include 'views/cursos.php';
}
elseif($pagina == 'alunos'){
    include 'views/alunos.php';
}
elseif($pagina == 'inserir_curso'){
    include 'views/inserir_curso.php';
}
elseif($pagina == 'inserir_aluno'){
    include 'views/inserir_aluno.php';
}
elseif($pagina == 'matriculas'){
    include 'views/matriculas.php';
}
else{
    include 'views/home.php';
}

# Rodapé
include 'footer.php';

