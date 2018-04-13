@extends('layouts.master')
    @section('content')
        <form method="post" action="/posts/{{$post->id}}">
           {{csrf_field()}}
            <span>Title</span><br/><br/>
            <input  type="text" name="title" value="{{$post->title}}"/><br/><br/>
            <span>Description</span><br/><br/>
            <input  type="text" name="description" value="{{$post->description}}"/><br/><br/>
            <span>Post creators</span><br/><br/>
            <select name="user_id" value="{{$post->user->id}}">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br/><br/>
            <input  type="submit" value="Update"/>    
        </form>    





    @endsection




