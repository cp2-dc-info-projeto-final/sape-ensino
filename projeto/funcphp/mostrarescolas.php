<?php
    require_once('conexaoBD.php');
    // 'Beta':  alterações nescessarias.
    $banco = connect_BD();
    $query = "SELECT nome, descricao from escolas";
    $stmt = $banco->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
 
    
    while($row = $result->fetch_assoc()){
    echo '<div class="card col-3 m-4">';
            echo '<div class="card-body">
						<h3 class="card-tite"  style="white-space:nowrap;">'.$row['nome'].'</h3>
						<h5 class="card-subtitle text-muted mb-2">Nome do Diretor</h5>
						<p class="card-text text-muted text-justify">'.$row['descricao'].'</p>
						<a class="text-decoration-none" href=""><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
                </div>'; 
    echo '</div>';
    }
   

?>