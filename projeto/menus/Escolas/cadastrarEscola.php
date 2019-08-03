<?php
session_start();

if(empty($_SESSION) || $_SESSION['cargo'] != 'Diretor'){
    header('Location: ../menu_include.php');
    exit();
}

    require_once('../../funcphp/conexaoBD.php');
    
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
            echo $codigov;
            $query_v = "SELECT * from escolas WHERE codigo = ?";
            $stmt_v = $banco->prepare($query_v);
            $stmt_v->bind_param('i', $codigo);
            $stmt_v->execute();
            $stmt_v->store_result();
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
    $stmt->bind_param('sssii', $escnome, $escdesc, $senhae, $_SESSION['id'], $codigov);
    if($stmt->execute() == true){
        //Sucesso
        $_SESSION['system_message'] = "Escola cadastrada com sucesso!  Código da Escola: $codigov";
        $_SESSION['alert_type'] = "success";
        header('Location: ../menu_include.php');
    } else {
        //Erro
        $_SESSION['system_message'] = "Cadastro da escola falhou! Tente Novamente ERROR: ".mysqli_error($banco);
        $_SESSION['alert_type'] = "danger";
        header('Location: ../menu_include.php');
    }


$banco->close();
exit();



?>