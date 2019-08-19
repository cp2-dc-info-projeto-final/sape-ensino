@if(Auth::Guest())
<ul class="navbar-nav ml-auto">
         <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="/login">Login</a>
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
@elseif(Auth::check())

<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="{{route('logout')}}"><button class="btn btn-outline-light">Sair</button></a>
		</li>
</ul>

@endif