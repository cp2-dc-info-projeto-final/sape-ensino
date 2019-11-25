
<div id="edit" class="tab-pane fade wow bounceInUp">
    <h2 class="text-center mb-4">Editar Perfil</h2>
    <p style="color: gray"> Se quiser mudar apenas um campo em especifico, basta não preencher os outros! </p>

    
    <!-- COLOCAR ^ DENTRO DO FORM 
        <div class="row"><i class="mr-2" data-feather="image"></i> he -->
            <form method="POST" enctype="multipart/form-data" action="{{ route('editar') }}">                      
                @csrf
                @method('PATCH')
                
                <div class="container">
                    <span class="row"><i class="mr-2" data-feather="user"></i>
                        <h5>Seu nome:</h5>
                        <input class="ml-3 col-10 form-control" type="text" id="name" name="name" placeholder="Nome Completo" >
                    </span>
                    <br>


                    <span class="row"><i class="mr-2" data-feather="mail"></i>
                        <h5>Novo email:</h5>
                        <input class="ml-3 col-10 form-control" placeholder="E-mail" type="email" name="email">
                    </span>
                    <br>



                    <span class="row"><i class="mr-2" data-feather="file-text"></i>
                        <h5>Nova Biografia:</h5>
                        <input type="textarea" class="row form-control ml-3 col-10" id="biografia" name="bio" rows="2" style="resize: none" placeholder="Biografia" >
                    </span>
                    <br> 

                    <div class="input-group mb-3">
                        <div class="row input-group-prepend">
                            <i class="ml-1 mr-2" data-feather="image"></i>
                            <input type="file" id="profile_picture" name="profile_picture" style="display: none;" />
                        </div>
                        <input value="Editar Foto de Perfil" class="btn btn-outline-secondary" type="button" onclick="document.getElementById('profile_picture').click();">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    
</div>