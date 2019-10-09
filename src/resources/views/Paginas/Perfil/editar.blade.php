
    <div id="edit" class="tab-pane fade">
      <h3>EDITAR</h3>

      <div class="container">
            <h3 class="text-center">Nome Completo do Usuário</h3><br>
            <span class="row"><i class="mr-4" data-feather="mail"></i><input class="row" placeholder="E-mail"></span><br>
            <span class="row"><i class="mr-4" data-feather="file-text"></i><input class="row" placeholder="Matrícula"></span><br>
            <span class="row"><i class="mr-0" data-feather="file-text"></i><textarea class="row form-control ml-1" id="exampleFormControlTextarea1" rows="1"></textarea></span><br> 
    </div>
      <form method="POST" enctype="multipart/form-data" action="{{ route('editar') }}">                      
        @csrf
        @method('PATCH')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <input type="file" id="profile_picture" name="profile_picture" style="display: none;" />
                </div>
                <input value="Editar Foto de Perfil" class="btn btn-outline-secondary" type="button" onclick="document.getElementById('profile_picture').click();">
            </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

    
    </div>