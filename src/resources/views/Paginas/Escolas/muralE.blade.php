@extends('Layouts.ext_M.mural')


@section('turma.escola.materia')

    @if($Sturmas == "true")
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='{{route("SmuralE", ["Sturmas" => "false", "eid" => "$eid"])}}'>Mural</a>
    @elseif($Sturmas == "false"|| $Sturmas == null)
        <a class="text-decoration-none btn btn-outline-primary btn-block my-2" href='{{route("SmuralE", ["Sturmas" => "true", "eid" => "$eid"])}}'>Suas Turmas</a>
    @endif


    @if(Auth::user()->cargo == "Diretor")
		<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Configurações</button>
			<div class="collapse bg-light p-2" id ="CollapseSidebar">
				<button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalTurma">Cadastrar Turmas</button>
					<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#apagarescola">Apagar escola</a>
			</div>
	@endif



@stop


@section('sub_content')
    @include('Paginas.Escolas.escola_modals')

    
    @if($Sturmas == 'true')


    <div class="row ml-md-2">
        @foreach ($turmas as $turma)
            <div class="card my-4 mx-4 col-10 col-sm-10 col-lg-3 ">
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

    
        <!-- Mural aqui -->


    @endif

@stop