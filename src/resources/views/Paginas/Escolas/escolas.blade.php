@extends('Layouts.master_layout')

@section('content')
    <!-- Botão & Modals-->
    <div class="container">
        @include('Paginas.Escolas.escola_modals')

        @if(Auth::User()->cargo == 'Diretor')

        <div class="btn-group my-3">
                <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#ModalEscola">Cadastrar Escola</button>
        </div>

        @elseif(Auth::User()->cargo != 'Diretor')

        <div class="btn-group ml-auto">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ModalEntrarEscolaAluno" data-toggle="modal">Entrar</button>
        </div>
        
        @endif

    </div>

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
                            <a class="text-decoration-none" href='{{route("SmuralE", ["eid" => "$escola->id"])}}'><button class="btn btn-primary btn-block">Entrar</button></a>
                            </div>
                        </div>
                    @endforeach


            </div> <!-- fim do alinhamento horizontal dos cards-->
        </div> 

@stop