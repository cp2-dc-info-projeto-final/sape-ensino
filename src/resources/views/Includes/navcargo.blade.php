@if(Auth::Guest())
<ul class="navbar-nav ml-auto">
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
@elseif(Auth::check())
	@if(Auth::User()->cargo == 'Diretor')

	<div class="btn-group ml-auto">
        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">Criação</button>
        <div class="dropdown-menu dropdown-menu-left">
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalEscola">Cadastrar Escola</button>
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalTurma">Criar Turma</button>
        </div>
    </div>

	@endif
	<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{route('logout')}}"><button class="btn btn-outline-light">Sair</button></a>
			</li>
	</ul>

@endif