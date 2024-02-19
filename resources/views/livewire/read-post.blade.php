

<div class="col-12 d-flex flex-column align-items-center">



    @foreach ($posts as $post)
    <div class="card mt-3" style="width: 18rem;">
        <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="fw-bold">{{$post->user->name}}</p>
            <p class="card-text">{{$post->content}}</p>
            @if(Auth::user() && Auth::user()==$post->user)
            <a href="{{route('edit_post' , compact('post'))}}" class="btn btn-success">Modifica Post</a>
            <button wire:click='delete({{$post}})'href="" class="btn btn-danger">Elimina Post</button>
            @endif
        </div>
    </div>
    @endforeach


</div>
