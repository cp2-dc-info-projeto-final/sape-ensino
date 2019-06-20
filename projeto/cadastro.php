<?php
include_once('/conexaoBD.php');

$banco = connect_BD();



$nome = $banco->real_escape_string($_POST["nome_cad"]);
$email = $banco->real_escape_string($_POST["email_cad"]);
$matricula = $banco->real_escape_string($_POST["matri_cad"]);
$senha = md5($_POST["senha_cad"]); // Nescessario verificar se as duas senhas são iguais ||AINDA NÃO IMPLEMENTADO||.

// Inserir dados no banco de dados //
$query_cadastro = "INSERT INTO aluno(nome, matricula, email, senha) VALUES (?,?,?,?)";
$stmt = $banco->prepare($query_cadastro);
$stmt->bind_param("ssss", $nome, $matricula, $email, $senha);

if($stmt->execute() == true){
    echo 'Cadastrado com sucesso';
    $banco->close();
} else {
    echo "Erro ao se comunicar com o banco de dados, erro: ".mysqli_error($banco);
    $banco->close();
}


?>