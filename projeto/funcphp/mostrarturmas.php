<?php
    require_once('conexaoBD.php');

    $banco = connect_BD();
    $idescola = $_GET['escolaid'];
    $query = "SELECT id, nome from turmas WHERE escola_id = ?";
    $stmt = $banco->prepare($query);
    $stmt->bind_param('i', $idescola);
    $stmt->execute();
    $result = $stmt->get_result();
 
    
    while($row = $result->fetch_assoc()){
    echo '<div class="card mb-3 col-12 col-sm-5 m-sm-3 col-lg-3 m-lg-4">';
            echo '<div class="card-body">
            <h3 class="card-tite text-center"  style="white-space:nowrap;">'.$row['nome'].'</h3>
            <div class="card-footer bg-white">
              <a class="text-decoration-none" href="#"><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
            </div>
                </div>'; 
    echo '</div>';
    }
   
    $banco->close();

?>