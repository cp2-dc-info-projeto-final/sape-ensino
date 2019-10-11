@extends('Layouts.ext_M.cadastro')

@section('cargo')

<div class="form-label-group mb-3">
        <label for="cargo">Seu Cargo</label>
        <div class="input-group">
            <div class="input-group-pretend">
              <span class="input-group-text"><i data-feather="briefcase"></i></span>
            </div>
              <select class="custom-select" id="Cargo" name="cargo" required="required" placeholder="Cargo">
                <option disable selected hidden>Selecione uma opção...</option>
                <option value="Professor">Professor</option>
                <option value="Diretor">Diretor</option>
              </select>
        </div>
</div>

@stop