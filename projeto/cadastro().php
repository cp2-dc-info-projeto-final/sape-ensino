<?php
include_once('conexãoBD().php');

session_start();
connect_BD();



$nome = $_POST["nome_cad"];
$email = $_POST["email_cad"];
$matricula = $_POST["matri_cad"];
$senha = $_POST["senha_cad"];

// Inserir dados no banco de dados //
$query_cadastro = "INSERT INTO usuarios VALUES (:no, :em, :matri, :sen)";
$stmt = $conexao->prepare($query_cadastro);
$stmt->bindParam(':no', $nome);
$stmt->bindParam(':em', $email);
$stmt->bindParam(':matri', $matricula);
$stmt->bindParam(':sen', $senha);
$stmt->execute();


?>