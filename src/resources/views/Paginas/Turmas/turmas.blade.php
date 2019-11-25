@extends('Layouts.ext_M.mural')

@section('turma.escola.materia')



    @if(Auth::user()->cargo == "Diretor")
        
		<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Opções</button>
			<div class="collapse bg-light p-2" id="CollapseSidebar">
                <!--<button class="btn btn-outline-primary btn-block my-2"  type="button" data-toggle="modal" data-target="#ModalCod">Código de Acesso</button>-->
				<!--<button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalTurma">Cadastrar Materias</button>-->
				<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#ModalApagarTurma">Apagar turma</a>
            </div>
            
    @elseif(Auth::user()->cargo == "Professor")

        <button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Opções</button>
        <div class="collapse bg-light p-2" id="CollapseSidebar">
            <!--<button class="btn btn-outline-primary btn-block my-2"  type="button" data-toggle="modal" data-target="#ModalCod">Código de Acesso</button>-->
            <button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalCriarMateria">Cadastrar Materias</button>
        </div>

	@endif

	

@stop

@section('sub_content')
@include('Paginas.Turmas.turmas_modals')

    <div class="mt-3 wow fadeIn">
        {{ Breadcrumbs::render('turmas', $turmas, $escolas) }}
    </div>


    @include('Includes.errors')        

    
    <div class="row ml-md-2">
    @foreach($materias as $materia)
                <div class="card my-4 mx-4 col-10 col-sm-10 col-lg-3 ">
                    <div class="card-body">
                        <h3 class="card-title"  style="white-space:nowrap;">{{$materia->nome}}</h3>
                        <p class="card-text">{{$materia->profname}}</p>
                    </div>
                    <div class="card-footer bg-white">
                    <a class="text-decoration-none" href='{{route("showmaterias", ["eid" => $escolas->id, "tid" => $turmas->id, "mid" => $materia->id])}}'><button class="btn btn-primary btn-block">Entrar</button></a>
                    </div>
                </div>
    @endforeach
    </div><!-- fim do alinhamento horizontal dos cards-->
    
    

@stop