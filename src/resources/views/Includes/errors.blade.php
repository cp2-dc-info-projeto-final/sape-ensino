@if($errors->any())
     @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show container wow heartBeat " role="alert">
                {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
    @endforeach
@endif

@if(session('success'))
   <div class="alert alert-success wow bounce">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
   </div> 
 @endif