@extends('Layouts.master_layout')

@section('content')
    
    <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
        <img class="img-fluid d-block mx-auto bd-placeholder-img rounded-circle" src="{{asset('storage/images/'.$user->profile_picture)}}" alt="Generic placeholder image" width="200" height="200">
    </header>
<div class="container">
   
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#inicio"  role="tab" aria-controls="v-pills-inicio"
                        aria-selected="true">Início</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#edit" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Editar Perfil</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#msg" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Mensagem</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#conf" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Configurações</a>
                </div>
            </div>

            
            @yield('pills')
            

        </div>
    </div>
</div>
@stop