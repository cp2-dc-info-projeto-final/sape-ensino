<?php
session_start();
 if(empty($_SESSION)){
	header("Location: login.php");
	exit();
 }
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Menu</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- area visivel no site -->

    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	
	<!-- js para icones no site -->
	<script src="js/feather.min.js"></script>

</head>

<body>
	<!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0 mb-4">
    	<div class="container"> <!--centralização do conteudo na pagina-->
	        <a class="navbar-brand h1 mb-0" href="#">Sape Ensino</a>
	        <button class="navbar-toggler ml-auto mr-2" data-toggle="collapse" data-target="#collapsenavbar" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar">Menu</button>
	        <div class="collapse navbar-collapse" id="collapsenavbar"> <!-- div com colapse para um fazer um dropdown da barra de navegação--> 
	            <ul class="navbar-nav mr-auto ml-3"><!--linha-->

	                <li class="nav-item"> <!--coluna-->
	                    <a class="nav-link" href="menu_docente.php">Início</a>
	                </li>
	                <li class="nav-item"> <!--coluna-->
	                        <a class="nav-link" href="#">Notificações</a>
	                </li>
	                <li class="nav-item"> <!--coluna-->
	                        <a class="nav-link" href="#">Perfil</a>
	                </li>
	                <li class="nav-item"> <!--coluna-->
	                        <a class="nav-link" href="#">Grade Horária</a>
	                </li>
					
				</ul> <!--fim da linha da barra de navegação-->

 				<!-- inclui o botão de criação de turma e sair para -->
				<?php
					include('funcphp/verificacargo.php');
				?>

			</div> <!-- fim do collapse -->
			
	    </div><!-- fim do conteudo da barra-->
	</nav><!-- fim da barra de navegação-->


	<div class="container border"> <!--conteudo do site-->
				
		<!-- Modal para Criar uma escola -->
		<div class="modal fade" id="ModalEscola" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cadastro de Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal da escola -->
						<form class="form-signin" method="post" action="funcphp/cadastrarEscola.php">
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
						<form class="form-signin">
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
                            			<option value=" "></option>
                            			<option value=" "></option>
                            			<option value=" "></option>
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
		 	include('funcphp/system_message.php');
		 ?>

		<div class="row">
			<nav arial-label="breadcrumb" class="mt-3 mr-3 ml-3 col-8"><!-- barra de diretório das paginas-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item active">Home</li>
					<?php $escolanome = $_GET['escolanome']; echo '<li class="breadcrumb-item active">'.$escolanome.'</li>'; ?>
				</ol>
			</nav><!-- fim da barra de diretório-->
 			<button class="btn btn-outline-danger col-3 mt-3 mb-3" type="button" data-toggle="modal" data-target="#apagarescola">Apagar escola</button>
 		</div>





		<!-- Modal para apagar escola -->
		<div class="modal fade" id="apagarescola" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Apagar Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal -->
						<form class="form-signin" method="post">
							<div class="form-label-group mb-3"> 
								<label for="NomeTurma">Senha da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="alert-circle"></i></span>
									</div>
									<input class="form-control" id="apagarescola" name="apagarescola" required="required" type="password" placeholder="EX. 12345678"/>
								</div>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="apagarescola">Apagar</button>
						</form>
					</div><!--fim do corpo -->
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
 		<div class="row">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">Calma</li>
					<li class="nav-item"><i data-feather="key"></i>Takagiiiiiiiiiiiiiiiiiiiii<li>
				</ul>

			</div>
		
			<div class="container ml-sm-2 ml-lg-4 ml-xl-5"><!-- centralizaçao do conteúdo-->
					<div class="row ml-md-2"><!--posiciona os cards horizontalmente-->
					
					<?php
						include('funcphp/mostrarturmas.php');
					?> <!-- Aqui fica o código de PHP para adicionar as turmas-->
						
					</div> 
				</div><!-- fim do alinhamento horizontal dos cards -->
			</div><!-- fim da centralização do conteúdo-->
 		</div>
	</div><!-- fim do conteudo do site-->
	
	


    <!-- Bootstrap.js and jquer.js -->
    <script src="js/jquery-3.4.1.min.js">
    </script>
    <script src="js/bootstrap.min.js">
	</script>
	<script>
      feather.replace()
    </script>
</body>

</html>