<?php
	require_once 'inclusao.php';

if (isset ($_POST["matricula"])){
    $mensagem = incluir ($_POST ["matricula"],
    $_POST["nome"], $_POST["data_entrada"]);
echo ( "<hr/>".$mensagem."<hr/>");
}
$alunos=obterAlunos();
?>  