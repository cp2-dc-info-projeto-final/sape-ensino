<nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 pb-0">
    <div class="container">
        <a class="navbar-brand h1 mb-0" href="#">Sape Ensino</a>
        <button class="navbar-toggler ml-auto mr-2" data-toggle="collapse" data-target="#collapsenavbar" href="#collapsenavbar" type="button" aria-expanded="false" aria-controls="collapsenavbar"><i data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav mr-auto ml-3">
            @if(Auth::check())    
                <li class="nav-item">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Notificações</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Grade Horária</a>
                </li>
                
            </ul>
            @endif
            
            @include('Includes.navcargo')
        </div><!-- fim do collapse -->
        
    </div><!-- fim do conteudo da barra-->
</nav><!-- fim da barra de navegação-->