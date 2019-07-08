<?php
if(!empty($_SESSION)){
    echo '
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="funcphp/sair.php"><button class="btn btn-outline-light">Sair</button></a>
            </li>
        </ul>';
    switch($_SESSION['cargo']){
        case 'Aluno': // Entrar em escolas e turmas.
        break;
        case 'Professor': // Entrar em escolas, turmas e criar materias.
        break;
        case 'Diretor': echo '
        <div class="btn-group">
            <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">Criação</button>
            <div class="dropdown-menu dropdown-menu-left">
                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalEscola">Cadastrar Escola</button>
                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalTurma">Criar Turma</button>
            </div>
        </div>';
    }
}
?>