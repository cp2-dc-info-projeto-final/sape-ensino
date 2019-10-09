@extends('Layouts.perfil_layout')


@section('pills')
@include('Includes.errors')
<div class="tab-content col-9">
    @include('Paginas.perfil.inicio')
    @include('Paginas.perfil.editar')
    @include('Paginas.perfil.messages')
    @include('Paginas.perfil.conf')
</div>

@stop