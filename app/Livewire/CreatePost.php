<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreatePost extends Component
{

    use WithFileUploads;

    public $content;
    public $img;
    public $user_id;


    protected $rules = [
        'content' => 'required',
    ];
    protected $messages = [
        'content.required' => 'Il contenuto è obbligatorio',
    ];

    public function store(){

        $post = Post::create([
            'content' => $this->content,
            'img' => $this->img->store('public/immagini'),
            'user_id' => Auth::user()->id,
        ]);

         $this->reset();
         session()->flash('message' , 'Post creato con successo');
         $this->dispatch('refreshPost');
        }

    public function render()

    {
        return view('livewire.create-post');
    }
}
