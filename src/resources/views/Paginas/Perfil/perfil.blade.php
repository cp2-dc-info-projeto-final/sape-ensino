@extends('Layouts.perfil_layout')


@section('pills')
@if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Opa!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
@endif
<div class="tab-content">
    @include('Paginas.perfil.editar')
    @include('Paginas.perfil.messages')
    @include('Paginas.perfil.conf')
</div>

@stop