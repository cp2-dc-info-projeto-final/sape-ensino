@extends('Layouts.perfil_layout')


@section('pills')
@include('Includes.errors')
<div class="tab-content">
    @include('Paginas.perfil.editar')
    @include('Paginas.perfil.messages')
    @include('Paginas.perfil.conf')
</div>

@stop