<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt-BR">
        <title>Listagem de alunos</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <body class="container">
        <h1> Alunos</h1>
    <p> <a href="novo.html" class="btn btn-primary">
        Novo Aluno </a></p>

        
    <table class="table">
    <tr class="table-dark"><td>Matricula</td>
    <td>Nome</td><td>Entrada</td></tr>

<?php
require_once 'inclusao.php';
require_once 'consulta.php'; //arquivo de obter os alunos.

$alunos=obterAlunos();

?>

<?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?php echo $aluno ->matricula; ?></td>
                <td><?php echo $aluno->nome; ?></td>
                <td><?php echo $aluno->data_entrada; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

</body>
</html>