@extends('layouts.master')
    @section('content')
        <div>
            Post Info
        </div><br/>
        <div>
           <span>Title: </span> <span>{{$post->title}} </span><br/>
           <span>Description: </span> <span>{{$post->description}} </span><br/>
        </div>
        <br/>
        <div>
            Post creator Info
        </div><br/>
        <div>
           <span>Name: </span> <span>{{$post->user->name}} </span><br/>
           <span>Email: </span> <span>{{$post->user->email}} </span><br/>
           <span>Created at: </span> <span>{{$post->user->created_at}} </span><br/>
        </div>

    @endsection 
