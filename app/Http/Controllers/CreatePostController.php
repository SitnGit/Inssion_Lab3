<?php

namespace App\Http\Controllers;

class CreatePostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }
    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        //var_dump(auth()->user());

        $post = auth()->user()->posts()->create($data);

        return redirect('/posts/'.$post->id);
    }

    public function createGallery(){
        return view('posts.createGallery');
    }

    public function storeGallery(){
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data['image'] = " ";

        $post = auth()->user()->posts()->create($data);

        return redirect('/posts/'.$post->id);
    }
}
