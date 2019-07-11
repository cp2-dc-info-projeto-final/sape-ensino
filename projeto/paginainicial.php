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
	<!-- barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    	<div class="container">
	        <a class="navbar-brand h1 mb-0 " href="#">Sape Ensino</a>
	        <button class="navbar-toggler" data-toggle="collapse" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="collapsenavbar">
	            <ul class="navbar-nav mr-auto ml-3">

	                <li class="nav-item">
	                    <a class="nav-link" href="#">Apresentação</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Objetivo</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#recursos">Recursos</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#">Guia Rápido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desenvolvedores</a>
                </li>
					
	            </ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="menudropdownnavbar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastro
						</a>
					<div class="dropdown-menu" aria-labelledby="menudropdownnavbar">
						<a class="dropdown-item" href="cadastro_aluno.php">Aluno</a>
						<a class="dropdown-item" href="cadastro_docente.php">Docente</a>
					</div>
					</li>
				</ul>
	        </div>
	    </div>
    </nav>
    

<div id="recursos"> 
    <div class="text-center">
        <h1>Recursos Inovadores</h1>
        <p>Recursos inovadores, comunicação escolar facilitada e um visual que você já está acostumado</p>
        <br> <br>
    </div>
    <div class="card-deck">
            <div class="card border-light text-center">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Comunicação simples e abrangente</h5>
                <p class="card-text">Com o Sape, sua escola pode enviar mensagens (textos, arquivos e mídias) para todas as turmas simultâneamente, de forma simples e limpa</p>
              </div>
            </div>
            <div class="card border-light text-center">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Título do card</h5>
                <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
              </div>
            </div>
            <div class="card border-light text-center">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Título do card</h5>
                <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
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