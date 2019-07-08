<?php
// Função para se conectar ao banco de dados
function connect_BD() { 

    $conexao = mysqli_connect("localhost","root","","sapeensino","3306");
    if (!$conexao)
    die ("Erro de conexão com o servidor, o seguinte erro ocorreu -> ".mysqli_error($conexao));
    return $conexao;
}


?>
