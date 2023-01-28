<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function show(\App\Models\Post $post){

        return view('posts.show',compact('post'));
    }
    public function showall(){
        $data = DB::table('posts')->get();
        return view('posts.showall',['data'=>$data]);
    }
}
