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
        <h1 class="card-title text-center">Recuperação de Senha</h1>
        <!-- MESSAGES -->
     
        <form class="form-signin" method="post" action="{{route('password.email')}}">
            {{ csrf_field() }}

            <!-- Errors -->
            @include('Includes.errors')
            
          
            <div>
              <label for="email">Digite seu Email</label>
              <div class="input-group">
                <div class="input-group-pretend">
                  <span class="input-group-text"><i data-feather="key"></i></span>
                </div>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" required="required" type="email" placeholder="seuemail@provedor.com"/>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Recuperar senha</button>
            </div>
           
        </form>
      </div>
    </div>
  </div>
</div>

</div>




@stop