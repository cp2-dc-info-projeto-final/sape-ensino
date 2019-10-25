
<div id="edit" class="tab-pane fade ">
    <h2 class="text-center mb-4">Editar Perfil</h2>

    
    <!-- COLOCAR ^ DENTRO DO FORM -->
        <div class="row"><i class="mr-2" data-feather="image"></i>
            <form method="POST" enctype="multipart/form-data" action="{{ route('editar') }}">                      
                @csrf
                @method('PATCH')
                
                            <div class="container">
                    <span class="row"><i class="mr-2" data-feather="user"></i>
                        <h5>Seu nome:</h5>
                        <input class="ml-3 col-7 form-control" placeholder="Nome Completo">
                    </span>
                    <br>


                    <span class="row"><i class="mr-2" data-feather="mail"></i>
                        <h5>Novo email:</h5>
                        <input class="ml-3 col-7 form-control" placeholder="E-mail">
                    </span>
                    <br>



                    <span class="row"><i class="mr-2" data-feather="file-text"></i>
                        <h5>Nova Biografia:</h5>
                        <textarea class="row form-control ml-1 col-7" id="biografia" rows="1" style="resize: none" placeholder="Biografia" ></textarea>
                    </span>
                    <br> 

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <input type="file" id="profile_picture" name="profile_picture" style="display: none;" />
                        </div>
                        <input value="Editar Foto de Perfil" class="btn btn-outline-secondary" type="button" onclick="document.getElementById('profile_picture').click();">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    
</div>