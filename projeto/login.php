<?php
include_once('/conexaoBD.php');

$banco = connect_BD();

$matricula = $banco->real_escape_string($_POST["matricula"]);
$senha = md5($_POST["senha"]);



$query_login = "SELECT * FROM aluno WHERE matricula = ? and senha = ?";
$stmt = $banco->prepare($query_login);
$stmt->bind_param("ss", $matricula, $senha);
$stmt->execute();
$stmt->store_result();
$rows = $stmt->num_rows;

if ($rows > 0){
    echo 'Logado com sucesso!';
    $banco->close();
} else {
    echo 'Falha no login, verifique os dados.';
    $banco->close();
}



?>