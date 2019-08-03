<?php
session_start();

if(empty($_SESSION)){
   header("Location: ../login/login.php");
   exit();
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Menu</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="../css/bootstrap.css">

	<link rel="stylesheet" href="../css/style.css">
	
	<script src="../js/feather.min.js"></script>

</head>

<body>
	<!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0 mb-4">
    	<div class="container">
	        <a class="navbar-brand h1 mb-0" href="#">Sape Ensino</a>
	        <button class="navbar-toggler ml-auto mr-2" data-toggle="collapse" data-target="#collapsenavbar" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar"><i data-feather="menu"></i></button>
	        <div class="collapse navbar-collapse" id="collapsenavbar">
	            <ul class="navbar-nav mr-auto ml-3">

	                <li class="nav-item">
	                    <a class="nav-link" href="menu_include.php">Início</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Notificações</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Perfil</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Grade Horária</a>
	                </li>
					
				</ul>	
				<?php
					include('verificacargo.php');
				?>
			</div><!-- fim do collapse -->
			
	    </div><!-- fim do conteudo da barra-->
    </nav><!-- fim da barra de navegação-->
    
    
    <div class="container boarder"> <!-- Contéudo dá Pagina -->




		<!-- Modal para entrar em uma escola -->
		<div class="modal fade" id="ModalEntrarEscolaAluno" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Entrar na Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal -->
						<form class="form-signin" method="post" action="Turmas/entrarTurma.php">
							<div class="form-label-group mb-3"> 
								<label for="CodEscola">Código da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="key"></i></span>
									</div>
									<input class="form-control" maxlength=6 id="EntrarEscola" name="EntrarEscola" required="required" type="password" placeholder="EX. 123456"/>
								</div>
							</div>    
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="EntrarEscola">Entrar</button>
						</form>
					</div><!--fim do corpo -->
					<div class="modal-footer"> 
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para a escola -->








    	<!-- Modal para Criar uma escola -->
		<div class="modal fade" id="ModalEscola" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cadastro de Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal da escola -->
						<form class="form-signin" method="post" action="Escola/cadastrarEscola.php">
							<div class="form-label-group mb-3"> 
								<label for="NomeEscola">Nome da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="file-text"></i></span>
									</div>
									<input class="form-control" maxlength=10 id="nomeescola" name="nomeescola" required="required" type="text" placeholder="CP2"/>
								</div>
							</div>    
							<div class="form-label-group mb-3">
								<label for="DescricaoEscola">Descrição</label>
								<div class="input-group">
									<div class="input-group-pretend">
									<span class="input-group-text"><i data-feather="message-square"></i></span>
									</div>
								<textarea class="form-control" maxlength=38 id="descescola" name="descescola" required="required" placeholder="ex. Nome completo da Escola" rows="1"></textarea>
								</div>
							</div>
							<div class="form-label-group mb-3"> 
								<label for="">Senha da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="alert-circle"></i></span>
									</div>
									<input class="form-control" id="senhaescola" name="senhaescola" required="required" type="password" placeholder="EX. 12345678"/>
								</div>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="CadastrarEscola">Cadastrar Escola</button>
						</form>
					</div><!--fim do corpo -->

					<div class="modal-footer"> 
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para a escola -->

		<!-- Modal para criar uma Turma -->
		<div class="modal fade" id="ModalTurma" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cadastro da Turma</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal da escola -->
						<form class="form-signin" method="post" action="Turma/cadastroturma.php">
							<div class="form-label-group mb-3"> 
								<label for="NomeTurma">Nome da Turma</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="file-text"></i></span>
									</div>
									<input class="form-control" maxlength=10 id="nometurma" name="nometurma" required="required" type="text" placeholder="1306"/>
								</div>
							</div>    
							<div class="form-label-group mb-3">
                    			<label for="escola-turma">Escola</label>
                    			<div class="input-group">
                        			<div class="input-group-pretend">
                          				<span class="input-group-text"><i data-feather="briefcase"></i></span>
                        			</div>
                                    <select class="custom-select" id="escola-turma" name="escola-turma" required="required" placeholder="Selecione uma opção...">
										<option disable selected hidden>Selecione uma opção...</option>
										<?php 
										include('selectescolas.php');
                            			//<option value=" "></option>
                            			//<option value=" "></option>
										//<option value=" "></option>
										?>
									</select>
                    			</div>
                			</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="CriarTurma">Criar Turma</button>
						</form>
					</div><!--fim do corpo -->

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
        </div><!-- fim do modal para criar uma turma -->
        
        <!-- Erros & Sucessos -->
         <?php
		 	include('../funcphp/system_message.php');
		 ?>
        
    <!-- Incluir Páginas -->
    <?php  
    switch (isset($_GET['url'])){
        case 'turmas': include('Turmas/menu_turmas.php');
        break;
        default: include('Escolas/menu_escolas.php');
        break;
    }
    ?>  <!-- Fim Do Conteúdo -->


    </div>
</body>
</html>











