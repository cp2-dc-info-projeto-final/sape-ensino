<?php
session_start();

if(!empty($_SESSION) && $_SESSION['cargo'] == 'Diretor'){
    require_once('conexaoBD.php');
    
    $banco = connect_BD();

    // Coletar dados da escola e proteger contra sql inject
    $escnome = $banco->real_escape_string($_POST['nomeescola']);
    $escdesc = $banco->real_escape_string($_POST['descescola']);
    //query sql
    $query = "INSERT INTO escolas (nome, descricao) VALUES (?, ?)";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('ss', $escnome, $escdesc);
    if($stmt->execute() == true){
        //Sucesso
        $_SESSION['system_message'] = "Escola cadastrada com sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: ../menu_docente.php');
        exit();
    } else {
        //Erro
        $_SESSION['system_message'] = "Cadastro da escola falhou! Tente Novamente";
        $_SESSION['alert_type'] = "danger";
        header('Location: ../menu_docente.php');
        exit();
    }




} else {
    header('Location: ../menu_docente.php');
    exit();
}







?>