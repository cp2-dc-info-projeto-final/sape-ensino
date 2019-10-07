<nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0">
    <div class="container">
        <a class="navbar-brand h1 mb-0" href="{{route('index')}}">Sape Ensino</a>
        <button class="navbar-toggler ml-auto mr-2" data-toggle="collapse" data-target="#collapsenavbar" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar"><i data-feather="menu"></i></button>

        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav mr-auto ml-3">
            @auth 
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Início</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Notificações</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('perfil')}}">Perfil</a>
                </li>
                
            @endauth
            </ul>

            @guest
                <!-- Guest Navbar --> 
            @endguest
            
            @include('Includes.navcargo')
        </div><!-- fim do collapse -->
        
    </div><!-- fim do conteudo da barra-->
</nav><!-- fim da barra de navegação-->