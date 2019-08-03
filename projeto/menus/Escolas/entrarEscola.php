<?php
    require_once('../funcphp/conexaoBD.php');

    $banco = connect_BD();

    $codigo = $banco->real_escape_string($_POST['EntrarEscola']);

    $query_1 = "SELECT id, codigo from escolas WHERE codigo = ?";
    $stmt_1 = $banco->prepare($query_1);
    $stmt_1->bind_param('i', $codigo);
    $stmt_1->execute();





?>