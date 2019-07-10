<?php
    require_once('conexaoBD.php');
    // 'Beta':  alterações nescessarias.
    $banco = connect_BD();
    $query = "select escolas.nome as enome, escolas.descricao, login.nome as lnome from escolas left join login on escolas.diretor = login.id";
    $stmt = $banco->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
 
    
    while($row = $result->fetch_assoc()){
    echo '<div class="card col-3 m-4">';
            echo '
                    <div class="card-header">
                        <h3 class="card-tite text-center mb-3">'.$row['enome'].'</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-subtitle text-muted mb-2">'.$row['lnome'].'</h5>
                        <p class="card-text text-muted text-justify">'.$row['descricao'].'</p>
                    </div>
                    <div class="card-footer">
						<a class="text-decoration-none position-relative-bottom" href=""><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
                    </div>'; 
    echo '</div>';
    }
   
    $banco->close();

?>