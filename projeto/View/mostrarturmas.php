<?php
    require_once('../Control/conexaoBD.php');

    $banco = connect_BD();
    $idescola = $_GET['escolaid'];
    $query = "SELECT id, nome from turmas WHERE escola_id = ?";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('i', $idescola);
    $stmt->execute();
    $result = $stmt->get_result();
 
    
    while($row = $result->fetch_assoc()){
    echo '<div class="card col-3 m-4">';
            echo '<div class="card-body">
						<h3 class="card-tite"  style="white-space:nowrap;">'.$row['nome'].'</h3>
						<a class="text-decoration-none" href="#"><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
                </div>'; 
    echo '</div>';
    }
   
    $banco->close();

?>