<?php
require_once 'config.php';

function obterAlunos(){
    global $dsn,$user,$pass;
    $alunos = [];
try{
    $pdo = new PDO ($dsn,$user,$pass, 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); //quando ouver algum erro, gera uma excessao
	
    $sql = "SELECT * FROM alunos";
    $stm = $pdo->query($sql);
    $stm ->execute();
    $alunos = $stm->fetchAll(PDO::FETCH_OBJ);
	
	
} catch (PDOException $e){
    $alunos=[];
}finally {
    if($pdo){
        $pdo=null;
    }
}
return $alunos;
}
?>