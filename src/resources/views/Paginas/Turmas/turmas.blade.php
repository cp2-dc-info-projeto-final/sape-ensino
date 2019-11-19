@extends('Layouts.ext_M.mural')

@section('turma.escola.materia')

    @if($Sturmas == "true")
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='#'>Mural</a>
    @elseif($Sturmas == "false"|| $Sturmas == null)
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='#'>Suas Turmas</a>
    @endif


    @if(Auth::user()->cargo == "Diretor")
        
		<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Opções</button>
			<div class="collapse bg-light p-2" id ="CollapseSidebar">
                <button class="btn btn-outline-primary btn-block my-2"  type="button" data-toggle="modal" data-target="#ModalCod">Código de Acesso</button>
				<button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalTurma">Cadastrar Turmas</button>
				<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#apagarescola">Apagar escola</a>
			</div>
	@endif

	

@stop

@section('sub_content')
    
    @if($Sturmas == 'false')


    <div class="row ml-md-2">
       
            <div class="card my-4 mx-4 col-10 col-sm-10 col-lg-3 ">
                <div class="card-body">
                    <h3 class="card-title"  style="white-space:nowrap;">Dale</h3>
                </div>
                <div class="card-footer bg-white">
                    <a class="text-decoration-none" href='{{route("visuturmas")}}'><button class="btn btn-primary btn-block">Entrar</button></a>
                </div>

    </div> <!-- fim do alinhamento horizontal dos cards-->


    @else

    
        <!-- Mural aqui -->
        <div>
                <div class="row col-11">
                    <ul class="nav nav-tabs col-10" id="turmaTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active primary text-secondary" data-toggle="tab" href="#TabDocente" role="tab" aria-controls="TabDocente" aria-selected="true">Avisos dos Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-secondary" data-toggle="tab" href="#TabAluno" role="tab" aria-controls="TabAlunos" aria-selected="false">Avisos dos Alunos</a>
                        </li>
                    </ul>
                
                    <button class="btn btn-outline-primary ml-auto" type="button" data-toggle="modal" data-target="#ModalPublicar">Manda a Trova</button>
                </div>

				<div class="tab-content">
					<div class="tab-pane fade show active" id="TabDocente">
                                    <!--Card de um post -->
                            <div class="card mt-3">
                                <!-- Cabeçalho do post -->                            
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="d-flex justify-content-between">
                                            <div class="mr-2">
                                                <img class="rounded-circle" width="45" src="#" alt="profile picture">
                                            </div>
                                            <div class="ml-2 my-auto">
                                                <div class="h5 m-0"><a href="#">nomelouco</a></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Fim do cabeçalho do post -->


                                <!-- Conteudo do post -->
                                <div class="card-body">
                                
                                    <a class="card-link" href="#">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                       Texto louco
                                    </p>
                                    <div class="row ml-2"> 
                                        <h3><span class="badge badge-primary mx-1"><a href="">aaaa</a></span></h3>
                                    </div>
                                </div>
                                <!--Fim do conteudo do post -->
                            </div>
                            <!--Fim do card de um post -->
                    </div>
                    
                    <div class="tab-pane fade" id="TabAluno"> <!-- Mural pra Alunos -->
                       
                                <!--Card de um post -->
                        <div class="card mt-3">
                            <!-- Cabeçalho do post -->                            
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="d-flex justify-content-between">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="#" alt="">
                                        </div>
                                        <div class="ml-2 my-auto">
                                            <div class="h5 m-0"><a>NOME AQUI DE ALUNO</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim do cabeçalho do post -->


                            <!-- Conteudo do post -->
                            <div class="card-body">
                            
                                <a class="card-link" href="#">
                                    <h5 class="card-title">Titulo</h5>
                                </a>

                                <p class="card-text">
                                    Dale
                                </p>
                                <div class="row ml-2">
                
                                        <h3><span class="badge badge-primary mx-1"><a>a</a></span></h3>
                                </div>
                            </div>
                            <!--Fim do conteudo do post -->
                        </div>
                        <!--Fim do card de um post -->

                    </div>    
				</div>
            </div>


    @endif

@stop