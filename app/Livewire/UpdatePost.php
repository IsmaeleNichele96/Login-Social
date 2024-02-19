<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdatePost extends Component
{
    use WithFileUploads;
    public $post;
    public $content;
    public $img;

   public function mount(){
    $this->content = $this->post->content;
   }

    public function update(){
        $this->post->update([
        $this->post->content = $this->content,
        ]);
        if($this->img){
            $this->post->img = $this->img->store('public/immagini');
            $this->post->save();
        }
        return redirect(route('welcome'))->with('message' , 'Post modificato con successo');
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
