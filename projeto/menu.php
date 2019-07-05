<?php
session_start();
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
	                        <a class="nav-link" href="#">Sobre Nós</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Tutoriais</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Contatos</a>
	                </li>
					
	            </ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="login.html">Login</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="menudropdownnavbar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastro
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="cadastro_aluno.html">Aluno</a>
							<a class="dropdown-item" href="cadastro_docente.html">Docente</a>
					</div>
					</li>
				</ul>
	        </div>
	    </div>
    </nav>
<?php
if(isset($_SESSION)){
	print_r($_SESSION);
}
		echo '<ul class="navbar-nav ml-auto">
		<li class="nav-item">
				<a class="nav-link" href="sair.php">Sair</a>
		</li> </ul'
?>

    <!-- Bootstrap.js and jquer.js -->
    <script src="js/jquery-3.4.1.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>