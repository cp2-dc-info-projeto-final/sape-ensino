<?php
include_once('/conexaoBD.php'); // Insere o arquivo de conexão ao banco

session_start(); // Iniciando a sessão

$banco = connect_BD(); // Conexão banco de dados.

// Coletar informações do formulario
$matricula = $banco->real_escape_string($_POST["matricula"]);
$senha = md5($_POST["senha"]);


// Executar query sql
$query_login = "SELECT nome, matricula, senha, cargo FROM login WHERE matricula = ? and senha = ?";
$stmt = $banco->prepare($query_login);
$stmt->bind_param("ss", $matricula, $senha);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nome, $matricula, $senha, $cargo);
$stmt->fetch();
// Verificar o resultado
if ($stmt->num_rows > 0){
    echo 'Logado com sucesso!';
    $_SESSION['nome'] = $nome;
    $_SESSION['cargo'] = $cargo;
    $banco->close();
    } else {
    echo 'Falha no login, verifique os dados.';
    $banco->close();
}

$stmt->close();

?>