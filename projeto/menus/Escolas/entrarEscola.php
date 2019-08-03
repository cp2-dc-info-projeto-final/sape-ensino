<?php
    session_start();

    require_once('../../funcphp/conexaoBD.php');

    if(isset($_SESSION['cargo']) && $_SESSION['cargo'] != 'Aluno'){
        header('Location: ../menu_include.php?');
    }

    $banco = connect_BD();

    $codigo = $banco->real_escape_string($_POST['EntrarEscola']);

    ////Conferir se existe uma escola com o código digitado:
    $query_1 = "SELECT id, nome, codigo from escolas WHERE codigo = ?";
    $stmt_1 = $banco->prepare($query_1);
    $stmt_1->bind_param('i', $codigo);
    $stmt_1->execute();
    $stmt_1->store_result();

    if($stmt_1->num_rows > 0) {
        $stmt_1->bind_result($id, $nome, $codigo);
        $stmt_1->fetch();   
    } else {
        $_SESSION['system_message'] = "Escola Inexistente!";
        $_SESSION['alert_type'] = 'danger';
        header('Location: ../menu_include.php?');
        $banco->close();
        exit();
    }

    //Inserir o Aluno naquela Escola ->
    $query = "INSERT INTO escola_aluno (id_escola, id_aluno) VALUES (?, ?)";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('ii', $id, $_SESSION['id']);
    if($stmt->execute() && $banco->affected_rows > 0) {
        $_SESSION['system_message'] = "Entrou com Sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: ../menu_include.php?url=turmas&eid='.$eid.'&escolanome='.$nome);
    } else {
        $_SESSION['system_message'] = "Falha ao se comunicar! Tente Novamente! ".mysqli_error($banco);
        $_SESSION['alert_type'] = "danger";
        header('Location: ../menu_include.php?');
    }


    $banco->close();
    exit();

?>