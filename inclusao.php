<?php

require_once 'config.php';
function incluir ($matricula, $nome, $data_entrada){
	global $dsn, $user, $pass;
	$mensagem ="";
	
	try{
		$pdo = new PDO ($dsn, $user, $pass,
	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
	$sql = "INSERT INTO ALUNOS VALUES (?,?,?)";
	$stm = $pdo->prepare($sql);
	$stm->execute ([$matricula,$nome,$data_entrada]);
	$mensagem="Aluno incluido com sucesso!";
	
}
catch (PDOException $e){
	$mensagem = "Erro o incluir Aluno.";
}
finally {
	if ($pdo){
		$pdo =null;
	}
}
return $mensagem;
}


?>