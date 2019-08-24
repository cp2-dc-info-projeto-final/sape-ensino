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
                <h1 class="card-title text-center">Login</h1>
        
                <form class="form-signin" method="post" action="{{route('login')}}">
                  {{ csrf_field() }}
                  
                  @include('Includes.errors')
                  
                  <div class="form-label-group mb-3"> 
                    <label for="matricula">Sua Matrícula</label>
                      <div class="input-group">
                          <div class="input-group-pretend">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                          </div>
                        <input class="form-control @error('matricula') is-invalid @enderror" id="matricula" name="matricula" required="required" type="text" placeholder="M12345678"/>
                      </div>
                     </div>    
                  <div class="form-label-group mb-3">
                      <label for="password">Sua password</label>
                      <div class="input-group">
                        <div class="input-group-pretend">
                          <span class="input-group-text"><i data-feather="key"></i></span>
                        </div>
                      <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" required="required" type="password" placeholder="ex. 12345678"/>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                         <div class="checkbox">
                             <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Manter-se logado
                            </label>
                          </div>
                    </div>
                 </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Logar">Logar-se</button>
                </form>
              </div>

              
              <div class="card-body " style="background-color:#e6e6e6">
                <p class="font-weight-bold text-center ">Ainda não se cadastrou?</p>
                <a class="text-decoration-none" href="{{route('Sregister', ['tipo' => 'cadastroD'])}}"><button class="btn btn-outline-secondary col-5 mr-1 ml-3">Docente</button></a>
                <a class="text-decoration-none" href="{{route('Sregister', ['tipo' => 'cadastroA'])}}"><button class="btn btn-outline-secondary col-5 ml-3">Aluno</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop