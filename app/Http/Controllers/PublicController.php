<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function show_profile(){
    $posts=Post::all();
    return view('showprofile', compact('posts'));

}



    public function welcome() {
        return view('welcome');
    }
    public function edit_post(Post $post){
        return view('edit_post' , compact('post'));
    }
}
