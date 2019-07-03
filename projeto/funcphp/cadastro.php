<?php
include_once('/conexaoBD.php');

$banco = connect_BD();



$nome = $banco->real_escape_string($_POST["nome_cad"]);
$email = $banco->real_escape_string($_POST["email_cad"]);
$matricula = $banco->real_escape_string($_POST["matri_cad"]);
$cargo = $_POST["cargo"];
if (empty($cargo)){
    $cargo = "Aluno";
}
$senha = $_POST["senha_cad"];
$senha2 =$_POST["consenha_cad"];

// Inserir dados no banco de dados //
if ($senha === $senha2){
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
    header('Location: ../login.html');
    $banco->close();
} else {
    echo "Erro ao se comunicar com o banco de dados, erro: ".mysqli_error($banco);
    $banco->close();
}

}else {
    if ($cargo != "Aluno"){
    echo "<script type='text/javascript'>alert('As duas senhas não coincidem!');javascript:window.location='../cadastro_docente.html';</script>";
    } else {
    echo "<script type='text/javascript'>alert('As duas senhas não coincidem!');javascript:window.location='../cadastro_aluno.html';</script>";
    }
}
?>