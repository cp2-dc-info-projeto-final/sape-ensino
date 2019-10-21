@extends(Layouts.ext_M.mural)


@section('sub_content')
    @include('Includes.diretorio')
    @include('Includes.errors')
            <div class="row ml-md-2">
                    @foreach ($turmas as $turma)
                        <div class="card my-4 mx-5 col-10 col-sm-10 col-lg-3 ">
                            <div class="card-body">
                                <h3 class="card-title"  style="white-space:nowrap;">{{$turma->nome}}</h3>
                            </div>
                            <div class="card-footer bg-white">
                                <a class="text-decoration-none" href='#'><button class="btn btn-primary btn-block">Entrar</button></a>
                            </div>
                        </div>
                    @endforeach


            </div> <!-- fim do alinhamento horizontal dos cards-->
        </div> 


@stop



    