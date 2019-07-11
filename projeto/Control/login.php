<?php
include_once('/conexaoBD.php'); // Insere o arquivo de conexão ao banco

session_start(); // Iniciando a sessão

if(!empty($_SESSION)){
    $_SESSION['system_message'] = "Já está logado!"; 
    $_SESSION['alert_type'] = "warning";
    header('Location: ../menu_docente.php');
    exit();
}
$banco = connect_BD(); // Conexão banco de dados.

// Coletar informações do formulario
$matricula = $banco->real_escape_string($_POST["matricula"]);
$senha = $_POST["senha"];

// Executar query sql
$query_login = "SELECT id, nome, email, matricula, senha, cargo FROM login WHERE matricula = ?";
$stmt = $banco->prepare($query_login);
$stmt->bind_param("s", $matricula);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $nome, $email, $matricula, $hash, $cargo);
$stmt->fetch();
// Verificar o resultado
if ($stmt->num_rows > 0 && password_verify($senha, $hash)){ 

    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['cargo'] = $cargo;
    $_SESSION['email'] = $email;
    $_SESSION['matricula'] = $matricula;
    if ($cargo != "Aluno"){
    header('Location: ../Model/menu_docente.php');
    } else {
    header('Location: ../Model/menu.php');
    }
  
    } else {
        $_SESSION['system_message'] = "Login Incorreto! Tente novamente.";
        $_SESSION['alert_type'] = "danger";
        header('Location: ../Model/login.php');
}


$banco->close();
exit();
?>