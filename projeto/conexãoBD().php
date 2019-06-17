<?php

connect_BD(){

$conexao = mysqli_connect("host","username","password","dbname","port");
if (!$conexao)
die ("Erro de conexão com o servidor, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados
$banco = mysqli_select_db("bdname",$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

return $conexao;
}





?>
