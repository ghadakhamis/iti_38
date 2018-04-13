<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        return view ('posts/index',[
            'posts'=>Post::all()
        ]);
    }
    public function show($id){
        return view ('posts/show',[
            'post'=>Post::where('id',$id)
        ]); 
    }
}
