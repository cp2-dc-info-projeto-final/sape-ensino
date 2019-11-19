@extends('Layouts.master_layout')

@section('content')

<div id="apresentação">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade col-11 mx-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active '" data-interval="90500">
                        <img class="img-fluid d-block w-100" src="{{asset('images/banner-2.png')}}"  alt="Primeiro Slide">
                      </div>
                      
                    </div>
                   
                    
                  </div>
    </div>

    
<div class= "container" id = "objetivos">
    <br>
    <br>
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('images/objetivo.jpg')}}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Objetivos da Plataforma</h1>
        <p>O projeto SAPE Ensino é uma plataforma web com o objetivo de simplificar o acesso entre o professor e o aluno dentro das escolas.</p>
        <p>Isso inclui troca de informações como por exemplo: mensagens, documentos, fotos, vídeos e planejamentos que o professor tem para seus alunos e suas turmas.</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
  </div>

    
<div class="container" id="recursos"> 
<br><br>
<br> <br>

    <div class="text-center">
        <h1 class="font-weight-light">Recursos Inovadores</h1>
        <p>Recursos inovadores, comunicação escolar facilitada e um visual que você já está acostumado</p>
        <br> <br>
    </div>
    <div class="card-deck">
            <div class="card border-light text-center">
              <img class="card-img-top" src="{{asset('images/apr-1.jpg')}}" width="120"  alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Comunicação simples e abrangente</h5>
                <p class="card-text">Com o Sape, sua escola pode enviar mensagens (textos, arquivos e mídias) para todas as turmas simultâneamente, de forma simples e limpa.</p>
              </div>
            </div>
            <div class="card border-light text-center">
              <img class="card-img-top" src="{{asset('images/apr-2.png')}}" width="120"  alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Compartilhamento de mídia</h5>
                <p class="card-text">Troca de informações rápido e fácil entre aluno e professor. Com suporte para texto, imagens, áudio, vídeo e documentos.</p>
              </div>
            </div>
            <div class="card border-light text-center">
              <img class="card-img-top" src="{{asset('images/apr-3.jpg')}}" width="120"  alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Visual fácil</h5>
                <p class="card-text">Visual simples e sofisticado, facilitando o uso da plataforma sem perder a qualidade.</p>
              </div>
            </div>
            <div class="card border-light text-center">
                <img class="card-img-top" src="{{asset('images/apr-4.png')}}" width="120"  alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Portabilidade</h5>
                  <p class="card-text">Site responsivo com ajuste automático para qualquer tipo de tela, compatível com dispositivos móveis</p>
                </div>
              </div>
          </div>
</div>
<br> <br>


<div class="container" id="guiarapido">
    <br> <br>
    <br> <br>

    <div class="text-center">
        <h1 class="font-weight-light">Guia Rápido</h1>
        <p>Nosso guia vai te mostrar como nossa plataforma apresenta seus recurso de formas simples e abrangete.</p>
      </div>
  <div class="jumbotron my-4">
    <div class="card-deck">
        <div class="card border-light text-center row no-gutters">
            <img class="card-img-top" src="{{asset('images/cad_escola.png')}}"  alt="Imagem de capa do card">
            <div class="card-footer bg-transparent border-primary text-secondary mt-3 ">
              <h4 class="card-title"> Cadastre Sua Escola</h4>
            </div>
          </div>
          <div class="card border-light text-center">
            <img class="card-img-top" src="{{asset('images/publicacao.png')}}" alt="Imagem de capa do card">
            <div class="card-footer bg-transparent border-primary text-secondary mt-3 ">
              <h4 class="card-title"> Publique Avisos e Conteúdos</h4>
            </div>
          </div>
        </div>
        <br>
          <div class="card-deck">
            <div class="card border-light text-center row no-gutters">
            <img class="card-img-top" src="{{asset('images/cel.png')}}"  alt="Imagem de capa do card">
            <div class="card-footer bg-transparent border-primary text-secondary mt-3 ">
              <h4 class="card-title">Menus Simples e Intuitivos</h4>
            </div>
          </div>
          <div class="card border-light text-center">
            <img class="card-img-top" src="{{asset('images/cad_turma.png')}}"  alt="Imagem de capa do card">
            <div class="card-footer bg-transparent border-primary text-secondary mt-5 ">
              <h4 class="card-title">Crie Turmas para suas escolas</h4>
            </div>
          </div>
    </div>
</div>

<div class=" mb-5" id="desenvolvedores">
  <div class="jumbotron container">
    <h1 class="font-weight-light text-center">Desenvolvedores</h1>
    <p class="lead text-center">Alunos do Colégio Pedro II cursando o Ensino Médio integrado ao técnico em desenvolvimento de sistemas.</p>
    
    <div class="row text-center">
      <div class="col-lg-3">
        <a href="https://github.com/LeinadAsid" target="_blank">
          <img class="rounded-circle" src="{{asset('images/daniel.jpg')}}" alt="Imagem Desenvolvedor" width="140" height="140">
          </a>
          <h5>Daniel Dias</h5>
      </div>
      <div class="col-lg-3">
        <a href="https://github.com/IsaakCPII" target="_blank">
          <img class="rounded-circle" src="{{asset('images/isaak.jpg')}}" alt="Imagem Desenvolvedor" width="140" height="140">
        </a>
        <h5>Isaak Santos</h5>
      </div>
      <div class="col-lg-3">
        <a href="https://github.com/PHasselmann" target="_blank"><img class="rounded-circle" src="{{asset('images/pedro.jpg')}}" alt="Imagem Desenvolvedor" width="140" height="140"></a>
        <h5>Pedro Hasselmann</h5>
      </div>
      <div class="col-lg-3">
        <a href="https://github.com/renancastro23" target="_blank"><img class="rounded-circle" src="{{asset('images/renan.jpg')}}" href="" alt="Imagem Desenvolvedor" width="140" height="140"></a>
        <h5>Renan Castro</h5>
      </div>
    </div>
  </div>
</div> 
<br>   
<br>
</div>

<footer class="py-4 mt-5 bg-primary" style="position:absolute;bottom:0;width:100%">
        <div class="container">
          <p class="m-0 text-center text-white">Copyleft Sape-Ensino 2019</p>
        </div>
        <!-- /.container -->
</footer>

@stop