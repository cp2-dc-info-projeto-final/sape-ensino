@extends('Layouts.modals')


@section('content')
    @include('Includes.errors')
        <div class="container"><!-- centralizaçao do conteúdo-->
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