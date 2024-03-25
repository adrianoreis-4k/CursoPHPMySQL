<?php

# mysqli
# Conexão com o banco de dados MySQL ****************************
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

# Criando tabelas usando PHP ************************************
# Tabela cursos (nome do curso, carga horária)
/*
$query = "CREATE TABLE cursos(
   id_curso int not null auto_increment,
   nome_curso varchar(255) not null,
   carga_horaria int not null,
   primary key(id_curso)
)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (cursos)<br>";
}


# Tabela alunos (nome do aluno, data de nascimento)
$query = "CREATE TABLE alunos(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (alunos)<br>";
}


# Tabela alunos_cursos (aluno, curso)
$query = "CREATE TABLE alunos_cursos(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (alunos_cursos)<br>";
}


# Inserir dados na tabelas *******************************************
$query = "INSERT INTO alunos (nome_aluno, data_nascimento) VALUES ('Maria', '01-04-1991')";
$executar = mysqli_query($conexao, $query);
# Inserir cursos
$query = "INSERT INTO cursos (nome_curso, carga_horaria) VALUES ('PHP e MYSQL', 10)";
$executar = mysqli_query($conexao, $query);

# Inserir alunos e seus cursos
$query = "INSERT INTO alunos_cursos (id_aluno, id_curso) VALUES (2, 1)";
$executar = mysqli_query($conexao, $query);


# Apagando dados de uma tabela

if (mysqli_query($conexao, "DELETE FROM cursos WHERE id_curso = 4 or id_curso = 5")){
    echo 'Apagado com sucesso';
}
else{
    echo 'Falha ao apagar dados';
}

# Alterando dados
if (mysqli_query($conexao, "UPDATE alunos SET nome_aluno = 'Jose Miguel' WHERE id_aluno = 1"));

if (mysqli_query($conexao, "UPDATE alunos SET nome_aluno = 'Maria Capitolina' WHERE id_aluno = 2"));


# Fazendo uma consulta com tabela
echo '<table border=2>
        <tr>
            <th> id </th>
            <th> Nome </th>
            <th> Data de Nascimento </th>
        </tr>';

$consulta = mysqli_query($conexao, "SELECT * FROM alunos");

while ($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>' . $linha['id_aluno'] . '</td>';
    echo '<td>'. $linha['nome_aluno'] . '</td>';
    echo '<td>' . $linha['data_nascimento'] . '</td></tr>';
}

echo '</table>';


# Alterando o nome de uma tabela
mysqli_query($conexao, "ALTER TABLE cursos CHANGE id_curso id int not null auto_increment");
*/

#realizando uma consulta avançado usando tabela
$consulta = mysqli_query($conexao, "SELECT alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_cursos WHERE alunos.id_aluno = alunos_cursos.id_aluno AND cursos.id_curso = alunos_cursos.id_curso");

echo '<table border=1>
        <tr>
            <th>Nome do Aluno </th>
            <th> Curso </th>
        </tr>';

while ($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso'].'</td></tr>';
}

echo '</table>';