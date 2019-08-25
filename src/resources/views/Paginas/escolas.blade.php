@extends('Layouts.modals')

@section('content')

<nav arial-label="breadcrumb" class="mt-3"><!-- barra de diretório das paginas-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Home</li>
    </ol>
</nav>

<div class="container ml-sm-2 ml-lg-4 ml-xl-5"><!-- centralizaçao do conteúdo-->
    <div class="row ml-md-2">

            @foreach ($escolas as $escola)

                {{ $escola }}
            
            @endforeach


    </div> 
</div><!-- fim do alinhamento horizontal dos cards-->
@stop