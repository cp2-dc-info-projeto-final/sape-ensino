<?php
    require_once('conexaoBD.php');
    // 'Beta':  alterações nescessarias.
    $banco = connect_BD();
    $query = "SELECT escolas.id as eid, escolas.nome as enome, escolas.descricao, login.nome as lnome from escolas
    left join login on escolas.diretor = login.id WHERE diretor = ?";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
    echo '<div class="card mb-3 col-12 col-sm-5 m-sm-3 col-lg-3 m-lg-4">';
            echo '
              <div class="card-body">
                <h3 class="card-title"  style="white-space:nowrap;">'.$row['enome'].'</h3>
                <h5 class="card-subtitle text-muted mb-2">'.$row['lnome'].'</h5>
                <p class="card-text">'.$row['descricao'].'</p>
              </div>
              <div class="card-footer bg-white">
                <a class="text-decoration-none" href="menu_docente_turmas.php?&escolanome='.$row['enome'].'
                "><button class="btn btn-primary btn-block">Entrar</button></a>
              </div>'; 
    echo '</div>';

    $_SESSION['currentEscola'] = $row['eid'];

    }
   
    $banco->close();

?>