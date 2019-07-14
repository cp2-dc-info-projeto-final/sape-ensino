<?php
session_start();

if(!empty($_SESSION) && $_SESSION['cargo'] == 'Diretor'){
    require_once('../funcphp/conexaoBD.php');
    
    $banco = connect_BD();

    // Coletar dados da escola e proteger contra sql inject
    $escnome = $banco->real_escape_string($_POST['nomeescola']);
    $escdesc = $banco->real_escape_string($_POST['descescola']);

    $senhae = md5($_POST['senhaescola']);

    //query sql
    $query = "INSERT INTO escolas (nome, descricao, diretor, senha) VALUES (?, ?, ?, ?)";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('ssis', $escnome, $escdesc, $_SESSION['id'], $senhae);
    if($stmt->execute() == true){
        //Sucesso
        $_SESSION['system_message'] = "Escola cadastrada com sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: menu_include.php');
    } else {
        //Erro
        $_SESSION['system_message'] = "Cadastro da escola falhou! Tente Novamente";
        $_SESSION['alert_type'] = "danger";
        header('Location: menu_include.php');
    }

} else {
    header('Location: menu_include.php');
}

$banco->close();
exit();



?>