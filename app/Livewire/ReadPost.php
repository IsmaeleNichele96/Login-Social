<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class ReadPost extends Component
{
    public function render()
    {
        $posts = $this->refreshPost();
        return view('livewire.read-post' , compact('posts'));
    }

    #[On('refreshPost')]

    public function refreshPost(){
        $posts = Post::all();
        return $posts;
    }

    public function delete(Post $post){
        $post->delete();
    }
}
