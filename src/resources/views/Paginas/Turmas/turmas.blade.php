@extends('Layouts.ext_M.mural')


@section('sub_content')
    
    @if($Sturmas == 'true')


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


    @endif

@stop