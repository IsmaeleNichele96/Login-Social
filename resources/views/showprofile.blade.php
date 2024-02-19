<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Profilo di {{Auth::user()->name}}</h1>
            </div>
            @foreach (Auth::user()->posts as $post)
                <div class="col-6">
                    <div class="card mt-3" style="width: 18rem;">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="fw-bold">{{$post->user->name}}</p>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{route('edit_post' , compact('post'))}}" class="btn btn-success">Modifica Post</a>
                            <button wire:click='delete({{$post}})'href="" class="btn btn-danger">Elimina Post</button>
                        </div>
                    </div>  
                </div>
            @endforeach
        </div>
</div>












</x-layout>