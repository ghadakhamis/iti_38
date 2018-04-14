<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Pagination\Paginator;

class PostsController extends Controller
{
    //
    public function index(){
        return view ('posts/index',[
            'posts'=>Post::paginate(3)
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
    public function update(Post $post,UpdatePostRequest $request){
        $post->slug = null;
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
    public function store(StorePostRequest $request)
    {
        // dd($request->all());
        $post=$request->only(['title','description','user_id']);
        Post::create($post);
        
       return redirect('/posts'); 
    }
}
