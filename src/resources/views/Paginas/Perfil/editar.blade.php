
<div id="edit" class="tab-pane fade">
    <h3 class="text-center">EDITAR</h3>

      <div class="container">
            <span class="row"><i class="mr-4" data-feather="file-text"></i><input class="row" placeholder="Nome Completo"></span><br>
            <span class="row"><i class="mr-4" data-feather="mail"></i><input class="row" placeholder="E-mail"></span><br>
            <span class="ml-0 row"><i class="mr-0 row" data-feather="file-text"></i><textarea class="row form-control ml-1" id="exampleFormControlTextarea1" rows="1" style="resize: none" placeholder="Biografia" ></textarea></span><br> 
    </div>
      <form method="POST" enctype="multipart/form-data" action="{{ route('editar') }}">                      
        @csrf
        @method('PATCH')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <i class="ml-0 mr-1 row" data-feather="image"></i>
                    <input type="file" id="profile_picture" name="profile_picture" style="display: none;" />
                </div>
                <input value="Editar Foto de Perfil" class="btn btn-outline-secondary" type="button" onclick="document.getElementById('profile_picture').click();">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    
</div>