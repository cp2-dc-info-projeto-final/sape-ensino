<?php
    session_start();
    require_once('../funcphp/conexaoBD.php');
    if(empty($_SESSION)){
        header('Location: menu_include.php');
        exit();
    }

    $banco = connect_BD(); // Conexão Banco De Dados

    // Variaveis 
    $id = $_GET['eid'];
    $senha = $_POST['senhae'];
    /////////////////APAGAR TURMAS DENTRO DA ESCOLA//////////////////////
    $qery = "DELETE FROM turmas WHERE escola_id = ?";
    $sttmt = $banco->prepare($qery);
    $sttmt->bind_param('i', $id);
    $sttmt->execute();
    //////////////////////////APAGAR A ESCOLA/////////////////////////
    $query = "DELETE FROM escolas WHERE id = ? and senha = ?"; // Query para apagar escola.
    $stmt = $banco->prepare($query);  //  ------------
    $stmt->bind_param('is', $id, md5($senha)); // -------------

     // Executar + Erros

    if($stmt->execute() == true && ($banco->affected_rows > 0)){
        //Sucesso
        $_SESSION['system_message'] = "Escola excluida com sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: menu_include.php');
    } else {
        //Erro
        $_SESSION['system_message'] = "Escola não foi excluida! Tente Novamente!";
        $_SESSION['alert_type'] = "danger";
        header('Location: menu_include.php');
    }




    $banco->close();
    exit();

?>