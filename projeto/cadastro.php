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
$senha = md5($_POST["senha_cad"]); // Nescessario verificar se as duas senhas são iguais ||AINDA NÃO IMPLEMENTADO||.
$senha2 = md5($_POST["consenha_cad"]);

// Inserir dados no banco de dados //
if ($senha === $senha2){
$query_cadastro = "INSERT INTO login(nome, matricula, email, senha, cargo) VALUES (?,?,?,?,?)";
$stmt = $banco->prepare($query_cadastro);
$stmt->bind_param("sssss", $nome, $matricula, $email, $senha, $cargo);

if($stmt->execute() == true){
    echo 'Cadastrado com sucesso';
    $banco->close();
} else {
    echo "Erro ao se comunicar com o banco de dados, erro: ".mysqli_error($banco);
    $banco->close();
}

}else {
    if ($cargo != "Aluno"){
    echo "<script type='text/javascript'>alert('As duas senhas não coincidem!');javascript:window.location='cadastro_docente.html';</script>";
    } else {
        echo "<script type='text/javascript'>alert('As duas senhas não coincidem!');javascript:window.location='cadastro_aluno.html';</script>";
    }
}
?>