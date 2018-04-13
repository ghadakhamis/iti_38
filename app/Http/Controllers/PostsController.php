<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        return view ('posts/index',[
            'posts'=>Post::all()
        ]);
    }
    public function show(Post $post ){
        return view ('posts.show',[
            'post'=> $post
        ]); 
    }
    public function edit(Post $post){
        return view ('posts.edit',[
            'post'=> $post,
            'users' => User::all()
        ]); 
    }
    public function update(Post $post,Request $request){
        $post->update([
            'title' =>$request->title,
            'description' =>  $request->description,
            'user_id' => $request->user_id
        ]);
        return redirect('/posts'); 
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts'); 
    }
    public function create(){
        return view ('posts.create',[
            'users' => User::all()        
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect('/posts'); 
    }
}
