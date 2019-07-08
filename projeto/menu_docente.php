<?php
session_start();
 if(empty($_SESSION)){
	header("Location: login.html");
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
    <link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/feather.min.js"></script>

</head>

<body>
	<!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0 mb-4">
    	<div class="container">
	        <a class="navbar-brand h1 mb-0" href="#">Sape Ensino</a>
	        <button class="navbar-toggler ml-auto mr-2" data-toggle="collapse" data-target="#collapsenavbar" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar">Menu</button>
	        <div class="collapse navbar-collapse" id="collapsenavbar">
	            <ul class="navbar-nav mr-auto ml-3">

	                <li class="nav-item">
	                    <a class="nav-link" href="#">Início</a>
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
					include('funcphp/verificacargo.php');
				?>
			</div><!-- fim do collapse -->
			
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
									<input class="form-control" id="nomeescola" name="nomeescola" required="required" type="text" placeholder="CP2"/>
								</div>
							</div>    
							<div class="form-label-group mb-3">
								<label for="DescricaoEscola">Descrição</label>
								<div class="input-group">
									<div class="input-group-pretend">
									<span class="input-group-text"><i data-feather="message-square"></i></span>
									</div>
								<textarea class="form-control" id="descescola" name="descescola" required="required" placeholder="ex. Nome completo da Escola" rows="1"></textarea>
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
						<h5 class="modal-title">Não está Pronto</h5>
					</div>
					<div class="modal-body">
						<p>Vai precisar ter escolas criadas para saber em qual delas a turma vai entrar</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-primary">Criar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para criar uma turma -->
		 
		 <!-- Erros & Sucessos -->
		 <?php
		 	if(isset($_SESSION['system_message'])){
				echo '<div class="alert alert-'.$_SESSION['alert_type'].'" role="alert">'
					.$_SESSION['system_message'].'
					  </div>';
				unset($_SESSION['system_message']);
				unset($_SESSION['alert_type']);
			 }
		 ?>

		<nav arial-label="breadcrumb" class="mt-3"><!-- barra de diretório das paginas-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Home</li>
			</ol>
		</nav><!-- fim da barra de diretório-->

		<div class="container ml-5"><!-- centralizaçao do conteúdo-->

				<div class="row ml-2"><!--posiciona os cards horizontalmente-->
					 <?php
					 	include('funcphp/mostrarescolas.php');
					 ?>
				</div> 
			</div><!-- fim do alinhamento horizontal dos cards-->
		</div><!-- fim da centralização do conteúdo-->
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