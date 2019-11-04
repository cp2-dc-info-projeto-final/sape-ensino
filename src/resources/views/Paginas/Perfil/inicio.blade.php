<div id="inicio" class="tab-pane active">
    <h2 class="ml-3">{{$user->name}}</h2>
    <div class="row ml-3 mt-4">
        <i data-feather="mail"></i><h5 class="text-secondary mx-2">{{$user->email}}</h5>
    </div>
    <div class="row ml-3 mt-4">
        @if($user->bio != null)
        <i data-feather="file-text"></i><h5 class="text-secondary col-10">{{$user->bio}}</h5>
        @else
        <i data-feather="file-text"></i><h5 class="text-secondary col-10">Usuario do sistema Sape Ensino!</h5>
        @endif
    </div>
</div>