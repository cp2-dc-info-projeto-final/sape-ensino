@extends('Layouts.master_layout')


@section('content')
<div class="row">
	
<!-- SideBar -->
    <nav class="col-md-3 col-lg-2 d-fixed d-md-block bg-light sidebar collapse " id="collapsesidebar">
		<div class="sidebar-sticky scrollbar scrollbar-pink bordered-pink thin ">
			<ul class="nav flex-column mr-3 pl-2">
				<h4 class="text-center text-secondary my-2">Painel</h4>

			
				@yield('turma.escola.materia')
				
				@if(Auth::user()->cargo == 'Diretor')
				<div class="dropdown-divider"></div>

				<h4 class="text-center text-secondary my-2">Docentes</h4>
				
					
				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Professores</p>
				</li>

				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Professores</p>
				</li>

				<div class="dropdown-divider"></div>

				<h4 class="text-center text-secondary my-2">Alunos</h4>


				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Alunos</p>
				</li>
				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Alunos</p>
				</li>
			</ul>
			@else

			<h4 class="text-center text-secondary my-2">Docentes</h4>
				
					
				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Diretores</p>
				</li>

				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Professores</p>
				</li>
				<div class="dropdown-divider"></div>
			
			@endif
			
		</div>
	</nav>
	<div class="col-9 mx-auto">

<!-- Fim da sidebar & e começo do conteudo da página--> 

    @yield('sub_content')
	</div>
</div>
@stop