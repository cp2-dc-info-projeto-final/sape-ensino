<?php
session_start();

if(!empty($_SESSION) && $_SESSION['cargo'] == 'Diretor'){
    require_once('../funcphp/conexaoBD.php');
    
    $banco = connect_BD();

    // Coletar dados da escola e proteger contra sql inject
    $escnome = $banco->real_escape_string($_POST['nomeescola']);
    $escdesc = $banco->real_escape_string($_POST['descescola']);

    $senhae = md5($_POST['senhaescola']);



    //gerar código: 
    $valido = false;
    $codigov = 0;
        while($valido == false){
            $codigov = random_int(1000, 9999);
            $query_v = "SELECT * from escolas WHERE codigo = ?";
            $stmt_v = $banco->prepare($query_v);
            $stmt_v->bind_param('i', $codigo);
            $stmt_v->execute();
            if ($stmt_v->num_rows > 0){
                $valido = false;
            } else {
                $valido = true;
            }
        }
    ////////



    //query sql
    $query = "INSERT INTO escolas (nome, descricao, senha, diretor, codigo) VALUES (?, ?, ?, ?, ?)";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('ssisi', $escnome, $escdesc, $_SESSION['id'], $senhae, $codigo);
    if($stmt->execute() == true){
        //Sucesso
        $_SESSION['system_message'] = "Escola cadastrada com sucesso!";
        $_SESSION['alert_type'] = "success";
        header('Location: menu_include.php');
    } else {
        //Erro
        $_SESSION['system_message'] = "Cadastro da escola falhou! Tente Novamente ERROR: ".msqli_error($banco);
        $_SESSION['alert_type'] = "danger";
        header('Location: menu_include.php');
    }

} else {
    header('Location: menu_include.php');
}

$banco->close();
exit();



?>