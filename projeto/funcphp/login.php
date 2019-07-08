<?php
include_once('/conexaoBD.php'); // Insere o arquivo de conexão ao banco

session_start(); // Iniciando a sessão

if(empty($_SESSION)){
$banco = connect_BD(); // Conexão banco de dados.

// Coletar informações do formulario
$matricula = $banco->real_escape_string($_POST["matricula"]);
$senha = $_POST["senha"];

// Executar query sql
$query_login = "SELECT nome, email, matricula, senha, cargo FROM login WHERE matricula = ?";
$stmt = $banco->prepare($query_login);
$stmt->bind_param("s", $matricula);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nome, $email, $matricula, $hash, $cargo);
$stmt->fetch();
// Verificar o resultado
if ($stmt->num_rows > 0 && password_verify($senha, $hash)){ 

    $_SESSION['nome'] = $nome;
    $_SESSION['cargo'] = $cargo;
    $_SESSION['email'] = $email;
    $_SESSION['matricula'] = $matricula;
    
    if ($cargo != "Aluno"){
    header('Location: ../menu_docente.php');
    } else {
    header('Location: ../menu.php');
    }
    $banco->close();
  
    } else {
    session_destroy();
    echo "<script type='text/javascript'>alert('Login falhou');javascript:window.location='../menu.php';</script>";
    $banco->close();
}

$stmt->close();
} else {
    echo "<script type='text/javascript'>alert('Você já está logado');javascript:window.location='../menu.php';</script>";
}
?>