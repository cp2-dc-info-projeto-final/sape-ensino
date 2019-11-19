@extends('Layouts.ext_M.mural')


@section('turma.escola.materia')

    @if($Sturmas == "true")
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='{{route("SmuralE", ["Sturmas" => "false", "eid" => "$eid"])}}'>Mural</a>
    @elseif($Sturmas == "false"|| $Sturmas == null)
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='{{route("SmuralE", ["Sturmas" => "true", "eid" => "$eid"])}}'>Suas Turmas</a>
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
    <div class="mt-3 wow fadeIn">
        {{ Breadcrumbs::render('escolas', $escolas) }}
    </div>
    @include('Includes.errors')
    @include('Paginas.Escolas.escola_modals')
    <!-- Modal para mostrar codigo de acesso--> 
	<div class="modal fade" id="ModalCod" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Código de Acesso</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal -->
						<h1 class="text-success text-center">{{App\Escolas::find($eid)->codigo}}</h1>
					</div><!--fim do corpo -->
					<div class="modal-footer"> 
						<button type="button" class="btn btn-outline-danger">Gerar Novo Código</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para a escola -->
    
    @if($Sturmas == 'true')


    <div class="row ml-md-2">
        @foreach ($turmas as $turma)
            <div class="card my-4 mx-4 col-10 col-sm-10 col-lg-3 wow flipInX">
                <div class="card-body">
                    <h3 class="card-title"  style="white-space:nowrap;">{{$turma->nome}}</h3>
                </div>
                <div class="card-footer bg-white">
                    <a class="text-decoration-none" href='{{route("visuturmas")}}'><button class="btn btn-primary btn-block">Entrar</button></a>
                </div>
            </div>
        @endforeach
    </div> <!-- fim do alinhamento horizontal dos cards-->


    @else

    
            <div>
                <div class="row mx-auto wow fadeIn">
                    <ul class="nav nav-tabs col-12 col-md-9" id="turmaTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active primary text-secondary" data-toggle="tab" href="#TabDocente" role="tab" aria-controls="TabDocente" aria-selected="true">Avisos dos Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-secondary" data-toggle="tab" href="#TabAluno" role="tab" aria-controls="TabAlunos" aria-selected="false">Avisos dos Alunos</a>
                        </li>
                    </ul>
                
                    <button class="btn btn-outline-primary ml-auto mt-3 mt-md-0 wow bounceInRight" type="button" data-toggle="modal" data-target="#ModalPublicar">Manda a Trova</button>
                </div>

				<div class="tab-content">
					<div class="tab-pane fade show active" id="TabDocente">

                       
                       
                       @foreach($posts_D as $post)
                            @foreach($post->post as $pos)
                            
                            @if($pos->user->cargo == 'Diretor')
                                    <!--Card de um post -->
                            <div class="card mt-3 shadow wow bounceInUp">
                                <!-- Cabeçalho do post -->                            
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="d-flex justify-content-between">
                                            <div class="mr-2">
                                                <img class="rounded-circle" width="45" src="{{asset('storage/images/'.$pos->user->profile_picture)}}" alt="profile picture">
                                            </div>
                                            <div class="ml-2 my-auto">
                                                <div class="h5 m-0"><a class="text-decoration-none" href="{{route('perfil', ['userid' => $pos->user->id])}}">{{$pos->user->name}}</a></div>
                                            </div>
                                        </div>

                                        @if(Auth::user()->cargo == "Diretor")
                                        <button class="btn ml-auto" type="button" data-target=""><i class="text-danger" data-feather="trash"></i></button>
                                        @endif
                                        
                                    </div>

                                </div>
                                <!-- Fim do cabeçalho do post -->


                                <!-- Conteudo do post -->
                                <div class="card-body ">
                                    <div class=" h7 col-12 row"> 
                                        
                                        <a class="card- mr-auto" href="#">
                                            <h5 class="card-title">{{$pos->titulo}}</h5>
                                        </a>
                                        <p class="text-muted ml-auto">19/11/2019</p>
                                    </div>
                                    

                                    <h5 class="card-text text-secondary">
                                        {{$pos->text}}
                                    </h5>

                                </div>

                                <hr>
                                <div class="row pb-3 pl-5">
                                    @foreach($pos->anexos as $anexos) 
                                        <a class="text-decoration-none btn btn-outline-primary mr-2 mt-2" href="{{asset('storage/post_files/'.$anexos->dir)}}">{!! trim(substr($anexos->dir, strpos($anexos->dir, '.') + 1)) !!}</a>
                                    @endforeach
                                </div>
                                
                                <!--Fim do conteudo do post -->
                            </div>
                            <!--Fim do card de um post -->
                        

                            @endif
                        @endforeach                        
                    @endforeach
                    {{$posts_D->appends(['posts_D' => $posts_D->currentPage(), 'posts_A' => $posts_A->currentPage()])->links()}}
                    </div>
                    
                    <div class="tab-pane fade" id="TabAluno"> <!-- Mural pra Alunos -->
                        @foreach($posts_A as $post)
                        @foreach($post->post as $pos)

                        @if($pos->user->cargo == 'Aluno')
                                <!--Card de um post -->
                        <div class="card mt-3  wow flipInX">
                            <!-- Cabeçalho do post -->                            
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="d-flex justify-content-between">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="{{asset('storage/images/'.$pos->user->profile_picture)}}" alt="">
                                        </div>
                                        <div class="ml-2 my-auto">
                                            <div class="h5 m-0"><a href="{{route('perfil', ['userid' => $pos->user->id])}}">{{$pos->user->name}}</a></div>
                                        </div>
                                    </div>
                                        @if(Auth::user()->cargo == "Diretor")
                                        <button class="btn ml-auto" type="button" data-target=""><i class="text-danger" data-feather="trash"></i></button>
                                        @endif
                                    
                                </div>

                            </div>
                            <!-- Fim do cabeçalho do post -->


                            <!-- Conteudo do post -->
                            <div class="card-body">
                            
                                    <div class=" h7 col-12 row"> 
                                        
                                        <a class="card- mr-auto" href="#">
                                            <h5 class="card-title">{{$pos->titulo}}</h5>
                                        </a>
                                        <p class="text-muted ml-auto">19/11/2019</p>
                                    </div>

                                <p class="card-text">
                                    {{$pos->text}}
                                </p>
                                <hr>
                                <div class="row pb-3 pl-5">
                                    @foreach($pos->anexos as $anexos) 
                                        <a class="class= text-decoration-none btn btn-outline-primary mr-2 mt-2" href="{{asset('storage/post_files/'.$anexos->dir)}}">{!! trim(substr($anexos->dir, strpos($anexos->dir, '.') + 1)) !!}</a>
                                    @endforeach
                                </div>
                            </div>
                            <!--Fim do conteudo do post -->
                        </div>
                        <!--Fim do card de um post -->
                    

                        @endif
                    @endforeach
                @endforeach
                {{$posts_A->appends(['posts_D' => $posts_D->currentPage(), 'posts_A' => $posts_A->currentPage()])->links()}}
                    </div>    
				</div>
            </div>


    @endif

@stop