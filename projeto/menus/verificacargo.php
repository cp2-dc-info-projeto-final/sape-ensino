<?php
switch($_SESSION['cargo']){
    case 'Aluno': // Entrar em escolas e turmas.
    echo'<div class="btn-group ml-auto">
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#ModalEntrarEscolaAluno" data-toggle="modal">Entrar</button>
        </div>';

    break;
    case 'Professor': // Entrar em escolas, turmas e criar materias.
    break;
    case 'Diretor': echo '
    <div class="btn-group ml-auto">
        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">Criação</button>
        <div class="dropdown-menu dropdown-menu-left">
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalEscola">Cadastrar Escola</button>
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalTurma">Criar Turma</button>
        </div>
    </div>';
    }
    if(!empty($_SESSION)){
        echo '
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../funcphp/sair.php"><button class="btn btn-outline-light">Sair</button></a>
                </li>
            </ul>';
}
?>