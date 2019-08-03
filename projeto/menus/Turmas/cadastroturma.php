<?php

    session_start();

    require_once('../../funcphp/conexaoBD.php');

    if(!empty($_SESSION) && $_SESSION['cargo'] == "Diretor"){
        header('Location: menu_include.php'); // Caso não-logado ou não diretor seja redirecionado para página de 'prof/user'. 
    }
    
    $banco = connect_BD();
    $turnome = $banco->real_escape_string($_POST['nometurma']);
    $escola = $_POST['escola-turma'];
    $query = "INSERT INTO turmas (nome, escola_id) VALUES (?, ?)";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('si', $turnome, $escola);
    
    if($stmt->execute() && $banco->affected_rows > 0){
        $_SESSION['system_message'] = "Turma criada com sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: ../menu_include.php?');
    } else {
        $_SESSION['system_message'] = "Falha ao criar turma! Tente Novamente";
        $_SESSION['alert_type'] = "danger";
        header('Location: ../menu_include.php?');
    }

    $banco->close();
    exit();


?>