<?php
session_start();
 if(empty($_SESSION)){
	header("Location: ../../Index.html");
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

</head>

<body>
	<!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0 mb-4">
    	<div class="container">
	        <a class="navbar-brand h1 mb-0 " href="#">Sape Ensino</a>
	        <button class="navbar-toggler" data-toggle="collapse" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar">
	            <span class="navbar-toggler-icon"></span>
	        </button>
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
				if(!empty($_SESSION)){
					echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="funcphp/sair.php"><button class="btn btn-outline-light">Sair</button></a>
					</li>
				</ul>';
				}
				?>
				
	        </div>
	    </div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="card col-3 m-3">
				<div class="card-body">
					<h3 class="card-tite"  style="white-space:nowrap;">Título da Escola</h3>
					<h5 class="card-subtitle text-muted mb-2">Nome do Diretor</h5>
					<p class="card-text text-muted text-justify">Descrição da escola que deve ser limitada a um número máximo de caracteres</p>
					<a class="text-decoration-none" href=""><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
				</div>
			</div>
			<div class="card col-3 m-3">
				<div class="card-body">
					<h3 class="card-tite"  style="white-space:nowrap;">Título da Escola</h3>
					<h5 class="card-subtitle text-muted mb-2">Nome do Diretor</h5>
					<p class="card-text text-muted text-justify">Descrição da escola que deve ser limitada a um número máximo de caracteres</p>
					<a class="text-decoration-none" href=""><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
				</div>
			</div>
			<div class="card col-3 m-3">
				<div class="card-body">
					<h3 class="card-tite"  style="white-space:nowrap;">Título da Escola</h3>
					<h5 class="card-subtitle text-muted mb-2">Nome do Diretor</h5>
					<p class="card-text text-muted text-justify">Descrição da escola que deve ser limitada a um número máximo de caracteres</p>
					<a class="text-decoration-none" href=""><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
				</div>
			</div>
		</div>
	</div>
	
	


    <!-- Bootstrap.js and jquer.js -->
    <script src="js/jquery-3.4.1.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>