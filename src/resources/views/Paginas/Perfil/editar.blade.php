
    <div id="edit" class="tab-pane fade in active">
      <h3>EDITAR</h3>
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