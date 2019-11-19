<div id="inicio" class="tab-pane active wow bounceInUp">
    <div class="row">
        <h2 class="ml-3">{{$user->name}}</h2>
        <h6><span class="badge badge-success mt-3 ml-1">{{$user->cargo}}</span></h6>
    </div>
        <div class="row ml-3 mt-4">
            <i data-feather="mail"></i><h5 class="text-secondary mx-2">{{$user->email}}</h5>
        </div>
        <div class="row ml-3 mt-4">
            @if($user->bio != null)
            <i data-feather="file-text"></i><h5 class="text-secondary col-10">{{$user->bio}}</h5>
            @else
            <i data-feather="file-text"></i><h5 class="text-secondary col-10">Usuario do Sape Ensino!</h5>
            @endif
        </div>
</div>