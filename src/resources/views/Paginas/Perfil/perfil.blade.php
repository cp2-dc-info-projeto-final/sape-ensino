@extends('Layouts.ext_M.perfil')


@section('pills')
@include('Includes.errors')
<div class="tab-content col-9">
    @include('Paginas.perfil.inicio')
    @include('Paginas.perfil.editar')
</div>

@stop