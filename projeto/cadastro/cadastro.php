<?php
session_start();

include_once('../funcphp/conexaoBD.php');

$banco = connect_BD();

function c_header($c) { // Redirecionar de acordo com o cargo
    if($c != "Aluno"){
        header('Location: cadastro_docente.php');
    } else{
        header('Location: cadastro_aluno.php');
    }
}

$nome = $banco->real_escape_string($_POST["nome_cad"]);
$email = $banco->real_escape_string($_POST["email_cad"]);
$matricula = $banco->real_escape_string($_POST["matri_cad"]);
$cargo = $_POST["cargo"];
if (empty($cargo)){
    $cargo = "Aluno";
}

$senha = $_POST["senha_cad"];
$senha2 =$_POST["consenha_cad"];

// Validar senhas
if($senha != $senha2){
    $_SESSION['system_message'] = "As senhas não coincidem";
    $_SESSION['alert_type'] = "danger";
    c_header($cargo);
    exit();
}

// Inserir dados no banco de dados //
$senha = password_hash($senha, PASSWORD_DEFAULT);
$query_cadastro = "INSERT INTO login(nome, matricula, email, senha, cargo) VALUES (?,?,?,?,?)";
$stmt = $banco->prepare($query_cadastro);
$stmt->bind_param("sssss", $nome, $matricula, $email, $senha, $cargo);

if($stmt->execute() == true){
    // Inserir nas respectivas tabelas
    if ($cargo != "Aluno") {
        $ID = $banco->insert_id;
        $query = "INSERT INTO docente(id) VALUES (?)";
        $prep = $banco->prepare($query);
        $prep->bind_param("i", $ID);
        $prep->execute();
    } else {
        $ID = $banco->insert_id;
        $query = "INSERT INTO aluno(id) VALUES (?)";
        $prep = $banco->prepare($query);
        $prep->bind_param("i", $ID);
        $prep->execute();
    }
    $_SESSION['system_message'] = "Cadastro concluido com sucesso!";
    $_SESSION['alert_type'] = "success";
    header('Location: ../login/login.php');

} else {
    // Notificar Erro
    $_SESSION['system_message'] = "Erro ao se comunicar com o banco de dados, erro: ".mysqli_error($banco);
    $_SESSION['alert_type'] = "danger";
    c_header($cargo);
}

$banco->close();
exit();
?>