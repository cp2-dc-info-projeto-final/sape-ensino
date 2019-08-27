@extends('Layouts.modals')


@section('content')

        <div class="container ml-sm-2 ml-lg-4 ml-xl-5"><!-- centralizaçao do conteúdo-->
            <div class="row ml-md-2">
                
                    @foreach ($diretor as $direto)
                        <div class="card mb-3 col-12 col-sm-5 m-sm-3 col-lg-3 m-lg-4">
                            <div class="card-body">
                            <h3 class="card-title"  style="white-space:nowrap;">{{$direto->nome}}</h3>
                            <h5 class="card-subtitle text-muted mb-2">{{$direto->descricao}}</h5>
                            <p class="card-text">{{$direto->name}}</p>
                            </div>
                            <div class="card-footer bg-white">
                            <a class="text-decoration-none" href="#"><button class="btn btn-primary btn-block">Entrar</button></a>
                            </div>
                        </div>
                    @endforeach


            </div> 
        </div><!-- fim do alinhamento horizontal dos cards-->

@stop