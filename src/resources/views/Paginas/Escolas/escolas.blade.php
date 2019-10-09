@extends('Layouts.master_layout')


@section('diretorio')
<div class="container">
    <div class="row">
    <div arial-label="breadcrumb" class=" col-11 mt-3"><!-- barra de diretório das paginas-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Home</li>
            </ol>
    </div><!-- fim da barra de diretório-->
@stop


@section('buttons')
    @include('Includes.modals')

        @if(Auth::User()->cargo == 'Diretor')

        <div class="btn-group my-3">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Criação</button>
            <div class="dropdown-menu dropdown-menu-left">
                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalEscola">Cadastrar Escola</button>
                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#ModalTurma">Criar Turma</button>
            </div>
        </div>

        @elseif(Auth::User()->cargo != 'Diretor')

        <div class="btn-group ml-auto">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ModalEntrarEscolaAluno" data-toggle="modal">Entrar</button>
        </div>
        
        @endif

    </div>
@stop


@section('content') 
      <!-- centralizaçao do conteúdo-->    
            @include('Includes.errors')
            <div class="row ml-md-2">
                    @foreach ($escolas as $escola)
                        <div class="card my-4 mx-5 col-10 col-sm-10 col-lg-3 ">
                            <div class="card-body">
                            <h3 class="card-title"  style="white-space:nowrap;">{{$escola->nome}}</h3>
                            <h5 class="card-subtitle text-muted mb-2">{{$escola->descricao}}</h5>
                            <p class="card-text">{{$escola->name}}</p>
                            </div>
                            <div class="card-footer bg-white">
                            <a class="text-decoration-none" href='{{route("Smural", ["eid" => "$escola->id"])}}'><button class="btn btn-primary btn-block">Entrar</button></a>
                            </div>
                        </div>
                    @endforeach


            </div> <!-- fim do alinhamento horizontal dos cards-->
        </div> 

@stop