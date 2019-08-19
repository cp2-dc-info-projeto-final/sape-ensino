@extends('Layouts.master_layout')

@section('content')
<style>
body{
    background-image: url({{asset('images/back.png')}});
    background-attachment: fixed;
    margin: 0%;
    height: 100%;
}
</style>
<div class="container">
        <div class="row">
          <div class="col-12 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h1 class="card-title text-center">Cadastro</h1>
                <!-- MESSAGES -->
                <form class="form-signin" method="post" action="{{route('register')}}">
                        {{ csrf_field() }}
                    <div class="form-label-group mb-3">
                      <label for="name">Seu Nome</label>
                      <div class="input-group">
                        <div class="input-group-pretend">
                          <span class="input-group-text"><i data-feather="user"></i></span>
                        </div>
                        <input class="form-control" id="name" name="name" required="required" type="text" placeholder="Nome Completo"/>
                      </div>
                    </div>
    
                    <div class="form-label-group mb-3">
                      <label for="email">Seu E-mail</label>
                      <div class="input-group">
                        <div class="input-group-pretend">
                          <span class="input-group-text"><i data-feather="mail"></i></span>
                        </div>
                        <input class="form-control" id="email" name="email" required="required" type="email" placeholder="ex. contato@dominio.com"/>
                      </div>
                    </div>
                    
                    <div class="form-label-group mb-3">
                        <label for="matricula">Sua Matricula</label>
                        <div class="input-group">
                          <div class="input-group-pretend">
                            <span class="input-group-text"><i data-feather="file-text"></i></span>
                          </div>
                          <input class="form-control" id="matricula" name="matricula" required="required" type="text" placeholder="ex. m2397523"/>
                        </div>
                    </div>
    
                    <div class="form-label-group mb-3">
                        <label for="password">Sua Senha</label>
                        <div class="input-group">
                          <div class="input-group-pretend">
                            <span class="input-group-text"><i data-feather="key"></i></span>
                          </div>
                        <input class="form-control" id="password" name="password" required="required" type="password" placeholder="ex. 12345678"/>
                      </div>
                    </div>
    
                    <div class="form-label-group mb-3">
                        <label for="consenha_cad">Confirme Sua Senha</label>
                        <div class="input-group">
                          <div class="input-group-pretend">
                            <span class="input-group-text"><i data-feather="key"></i></span>
                          </div>
                          <input class="form-control" id="consenha_cad" name="password_confirmation" required="required" type="password" placeholder="ex. 12345678"/>
                        </div>
                      </div>

                      @yield('cargo') <!-- Form de cargo docente -->

                  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar-se">Cadastrar-se</button>
              </div>
              <div class="card-body " style="background-color:#e6e6e6">
                </form>
                <p class="font-weight-bold text-center ">Já tem uma conta?</p>
                <a class="text-decoration-none" href="{{route('Slogin')}}"><button class="btn btn-outline-secondary btn-block">Ir para o Login</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop