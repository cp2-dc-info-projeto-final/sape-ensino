<?php
include_once('/conexaoBD.php'); // Insere o arquivo de conexão ao banco

$banco = connect_BD(); // Conexão banco de dados.

// Coletar informações do formulario
$matricula = $banco->real_escape_string($_POST["matricula"]);
$senha = md5($_POST["senha"]);


// Executar query sqls
$query_login = "SELECT * FROM login WHERE matricula = ? and senha = ?";
$stmt = $banco->prepare($query_login);
$stmt->bind_param("ss", $matricula, $senha);
$stmt->execute();
$stmt->store_result();
$rows = $stmt->num_rows;

// Verificar o resultado
if ($rows > 0){
        echo 'Logado com sucesso!';
        $banco->close();
    } else {
    echo 'Falha no login, verifique os dados.';
    $banco->close();
}



?>