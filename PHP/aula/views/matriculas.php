<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matrícula</a>

<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome do Aluno</th>
            <th>Nome do Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_matriculas)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
        ?>
                <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
                    <span style="color: Tomato;">
                        <i class="fas fa-trash-can"></i>
                    </span>
                </a></td></tr>
            
        <?php
            }
        ?>
    </tbody>
</table>