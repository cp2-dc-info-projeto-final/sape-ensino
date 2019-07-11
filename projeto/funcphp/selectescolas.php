<?php
//Criar Turmas somente nas escolas que são suas.
    require_once('conexaoBD.php');
    $banco = connect_BD();
    $query = "select id, nome from escolas where diretor = ?";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();


    while($row = $result->fetch_assoc()){
        echo '<option value="
        '.$row['id'].'
        ">'.$row['nome'].
        '</option>';
        }
?>