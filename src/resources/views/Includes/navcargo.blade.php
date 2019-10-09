@guest

			<button class="navbar-toggler" data-toggle="collapse" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="collapsenavbar">
	            <ul class="navbar-nav mr-auto ml-3">

	                <li class="nav-item">
	                    <a class="nav-link" href="#apresentação">Apresentação</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#objetivos">Objetivo</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#recursos">Recursos</a>
	                </li>
	                <li class="nav-item">
	                        <a class="nav-link" href="#guiarapido">Guia Rápido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#desenvolvedores">Desenvolvedores</a>
                </li>
					
	            </ul>
	        </div>

<ul class="navbar-nav my-2">
         <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{route('Slogin')}}">Login</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="menudropdownnavbar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cadastro
				</a>
			    <div class="dropdown-menu" aria-labelledby="menudropdownnavbar">
				    <a class="dropdown-item" href="{{route('Sregister', ['tipo' => 'cadastroA'])}}">Aluno</a>
				    <a class="dropdown-item" href="{{route('Sregister', ['tipo' => 'cadastroD'])}}">Docente</a>
			    </div>
			</li>
		</ul>
</ul>
@endguest
@auth


	<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{route('logout')}}"><button class="btn btn-outline-light">Sair</button></a>
			</li>
	</ul>

	

@endauth
